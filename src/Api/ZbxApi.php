<?php

namespace ZbxApi\Api;

use Http\Discovery\Psr18ClientDiscovery;
use Http\Message\MessageFactory\MessageFactoryDiscovery;
use Http\Message\StreamFactory\StreamFactoryDiscovery;

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

    /**
     * ZbxApi constructor.
     */
    public function __construct()
    {
        // Set Zabbix credentials and host
        $this->setCredentials();
        $this->setZabbixHost();

        $this->client = new PluginClient(
             Psr18ClientDiscovery::find(),
            new MessageFactoryDiscovery(),
            new StreamFactoryDiscovery()
        );
        // Login to Zabbix
        $this->login();
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
     */
    public function sendRequest(string $dataString): string
    {
        $result = $this->client->sendRequest(
            $this->zabbixhost,
            'POST',
            [
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json'
                ],
                'body' => $dataString
            ]
        );

        return $result->getBody();
    }

    /**
     * Login to Zabbix
     */
    public function login(): void
    {
        if ($this->apitoken === 'notset') {
            $jsonInfo = json_encode(
                [
                    'jsonrpc' => '2.0',
                    'method' => 'user.login',
                    'params' => [
                        'user' => $this->username,
                        'password' => $this->password
                    ],
                    'id' => 1
                ]
            );
            $test = $this->sendRequest($jsonInfo);
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
     * @return string
     */
    public function parseRequest(string $method, array $params, array $addons): string
    {
        $array = [
            'jsonrpc' => '2.0',
            'method' => $method,
            'params' => $params,
            'auth' => $this->apitoken,
            'id' => 1
        ];

        if (is_array($addons)) {
            $array = array_merge($array, $addons);
        }

        return json_encode($array);
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
        $files = json_decode($this->sendRequest($jsonInfo));
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