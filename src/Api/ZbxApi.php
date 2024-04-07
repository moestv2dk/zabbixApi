<?php

namespace ZbxApi\Api;

use GuzzleHttp\Client;

class ZbxApi
{
    /**
     *  username
     */
    private $username = "";
    private $password = "";
    public $apitoken = "notset"; //default value
    public $zbxhost = '';  //we add  this  for  the  description  of the trigger
    public $zabbixhost = ''; // call for api
    public $triggers = 'notset';
    public $hosts = 'notset';
    private $Requests;

    public function __construct()
    {
        //Log in to zabbix
        $this->setUsername(ZABBIXUSER);
        $this->setPassword(ZABBIXPASS);
        $this->setApitoken(ZABBIXTOKEN);
        $this->setZbxhost(ZABBIXHOST);
        $this->setZabbixhost(ZABBIXURL);
        $this->setRequests();
        $this->login();
    }
    public function SendRequest($data_string)
    {
        // we  build the  curl options for contacting the  zabbix host
        $result = $this->Requests->request(
            "post",
            $this->zabbixhost,
            [
                 'headers' =>
             [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ],
                'body' =>  $data_string
            ]
        );
        return $result->getBody();

    }
    public function login()
    {
        //we  detect if  the API token is default value, if it is not, we dont need to log in again.
        if ($this->getApitoken() == 'notset') {
            $jsoninfo = '{ "jsonrpc":"2.0","method": "user.login", "params" :{ "user": "' . $this->username . '", "password": "' . $this->password . '"},"id":1}';
            $test = $this->SendRequest($jsoninfo);
            $files = json_decode($test);
            //set api token so we can log in
            $this->setApitoken($files->result);
        }
    }
    public function ParseRequest($method, $params, $addons): string
    {
        //we build  the array  that is needed for  the contact with Zabbix
        $array = array();
        $array['jsonrpc'] = '2.0';
        $array['method'] = $method;
        $array['params'] = $params;
        if (is_array($addons)) {
            array_merge($array, $addons);
        }
        $array['auth'] = $this->getApitoken();
        $array['id'] = 1;
        //we return  the converted array to json
        return json_encode($array);
    }
    public function GetRequest($method, $params, $addons): object
    {
        // we ask to get our arrays converted to json
        $jsoninfo = $this->ParseRequest($method, $params, $addons);

        // we fire off our json request and then return the  Json decoded content
        $files = json_decode($this->SendRequest($jsoninfo));

        return $files;
    }
    public function get_zabbix_req($method, $params, $addons)
    {
        return $this->GetRequest($method, $params, $addons);
    }
    /**
     * Get the value of apitoken
     */
    public function getApitoken()
    {
        return $this->apitoken;
    }

    /**
     * Set the value of apitoken
     *
     * @return  self
     */
    public function setApitoken($apitoken)
    {
        $this->apitoken = $apitoken;

        return $this;
    }

    /**
     * Get the value of hosts
     */
    public function getHosts()
    {
        return $this->hosts;
    }

    /**
     * Set the value of hosts
     *
     * @return  self
     */
    public function setHosts($hosts)
    {
        $this->hosts = $hosts;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get username
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set username
     *
     * @return  self
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of zbxhost
     */
    public function getZbxhost()
    {
        return $this->zbxhost;
    }

    /**
     * Set the value of zbxhost
     *
     * @return  self
     */
    public function setZbxhost($zbxhost)
    {
        $this->zbxhost = $zbxhost;

        return $this;
    }

    /**
     * Get the value of zabbixhost
     */
    public function getZabbixhost()
    {
        return $this->zabbixhost;
    }

    /**
     * Set the value of zabbixhost
     *
     * @return  self
     */
    public function setZabbixhost($zabbixhost)
    {
        $this->zabbixhost = $zabbixhost;

        return $this;
    }
    public function __destruct()
    {
        // we Destroy the session to avoid building up Zabbix  Login  table when not logged in anymore
        $jsoninfo = $this->apiBuilder('logout', '', '');
        $this->Request($jsoninfo);
    }

    /**
     * Get the value of Requests
     */
    public function getRequests()
    {
        return $this->Requests;
    }

    /**
     * Set the value of Requests
     *
     * @return  self
     */
    public function setRequests()
    {
        $this->Requests = new Client();

        return $this;
    }
}
