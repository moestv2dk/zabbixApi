<?php

namespace ZbxApi\Api;

use Http\Discovery\Psr18Client;
use Http\Discovery\Psr18ClientDiscovery;
use Http\Discovery\Psr17FactoryDiscovery;

/**
 * Class ZbxApi
 * @package ZbxApi\Api
 */
class ZbxApi
{
    /**
    * @var string
    */
    private $username;

    /**
    * @var string
    */
    private $password;

    /**
    * @var string
    */
    private $apitoken;

    /**
    * @var string
    */
    public $zbxhost;

    /**
    * @var string
    */
    public $zabbixhost;

    /**
    * @var PluginClient
    */
    private $client;
    private $hbody;
    /**
    * ZbxApi constructor.
    *
    * @param RequestFactoryInterface|null $requestFactory
    * @param StreamFactoryInterface|null $streamFactory
    */
    public function __construct()
    {
        // Set Zabbix credentials and host

        $this->setCredentials();
        $this->setZabbixHost();
        $this->client = Psr18ClientDiscovery::find();
        $this->hbody  = Psr17FactoryDiscovery::findStreamFactory();
    }

    /**
    * Set Zabbix credentials
    */
    private function setCredentials(): void
    {
        $this->username = ZABBIXUSER;
        $this->password = ZABBIXPASS;
        if(ZABBIXTOKEN == '') {
            $this->apitoken = 'notset';
        } else {
            $this->apitoken = ZABBIXTOKEN;
        }
    }

    /**
    * Set Zabbix host
    */
    private function setZabbixHost(): void
    {
        $this->zbxhost = ZABBIXHOST;
        $this->zabbixhost = ZABBIXURL;
    }

    /**
    * Send request to Zabbix
    *
    * @param string $dataString
    *
    * @return string
    *
    */
    public function sendPostRequest(array $object, string $method = 'POST'): object
    {
        /**
         *  Build the Json string to parse to Zabbix
         */
        $dataString = $this->parseRequest($object['method'], $object['params'], array());
        /*/**
         *  Load and create the request
         */
        $post = $this->client->createRequest($method, $this->zabbixhost);
        /**
         * Set the headers correctly
         */
        $post  = $post->withHeader('Content-Type', 'application/json');
        $post  = $post->withHeader('Authorization', 'Bearer '. $this->apitoken);
        /**
         * Loadup the body with the Json encoded  datastring
         */
        $bodyStream = $this->hbody->createStream(json_encode($dataString));
        /**
         *  Populate the body with the stream
        */
        $post = $post->withBody($bodyStream);
        /**
        * Send the request and return the response
        */
        $response = $this->client->sendRequest($post);
        return json_decode($response->getBody()->getContents());
    }

    /**
    * Login to Zabbix
    */
    public function login(): void
    {
        if ($this->apitoken === 'notset') {
            $jsonInfo =
                [
                    'jsonrpc' => '2.0',
                    'method' => 'user.login',
                    'params' => [
                    'user' => $this->username,
                    'password' => $this->password
                    ],
                    'id' => 1
            ];
            $test = $this->sendPostRequest($jsonInfo);
            $files = json_decode($test);
            // Set api token so we can log in
            $this->apitoken = $files->result;
        }
    }

    /**
    * Parse request to Zabbix
    *
    * @param string $method
    * @param array $params
    * @param array $addons
    *
    * @return
    */
    public function parseRequest(string $method, array $params, array $addons): array
    {
        $array =
        [
            'jsonrpc' => '2.0',
            'method' => $method,
            'params' => $params,
            'id' => 1
        ];

        if (is_array($addons) && !empty($addons)) {
            $array = array_merge($array, $addons);
        }

        return $array;
    }

    /**
    * Get request from Zabbix
    *
    * @param string $method
    * @param array $params
    * @param array $addons
    *
    * @return object
    */
    public function getRequest(string $method, array $params, array $addons): object
    {

        $jsonInfo = $this->parseRequest($method, $params, $addons);
        $files = json_decode($this->sendPostRequest($jsonInfo, 'GET'));
        return $files;
    }

    /**
    * Get request from Zabbix
    *
    * @param string $method
    * @param array $params
    * @param array $addons
    *
    * @return object
    */
    public function getZabbixReq(string $method, array $params, array $addons): object
    {
        return $this->getRequest($method, $params, $addons);
    }
}
