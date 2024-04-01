<?php

namespace ZabbixApi\ZabbixApi;

class ZabbixApi
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

    public function __construct($info = "hosts", $keys = '')
    {
        //Log in to zabbix
        $this->username = ZABBIXUSER;
        $this->password = ZABBIXPASS;
        // if API token is set via constant we wont use User and password
        $this->apitoken = ZABBIXTOKEN;

        $this->zbxhost = ZABBIXHOST;
        $this->zabbixhost = ZABBIXURL;

        $this->login();

    }
    public function curl_request($data_string): object
    {
        // we  build the  curl options for contacting the  zabbix host

        $ch = curl_init($this->zabbixhost);

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
          'Accept: application/json', 'Content-Type: application/json'
        ));

        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, true);

        $result = curl_exec($ch);
        $info = curl_getinfo($ch);

        //execute the curl and close the connection
        curl_close($ch);
        return $result;
    }
    public function login()
    {
        //we  detect if  the API token is default value, if it is not, we dont need to log in again.
        if ($this->apitoken == 'notset') {

            $jsoninfo = '{ "jsonrpc":"2.0","method": "user.login", "params" :{ "user": "' . $this->username . '", "password": "' . $this->password . '"},"id":1}';

            $test = $this->curlie($jsoninfo);

            $files = json_decode($test);

            //set api token so we can log in

            $this->apitoken = $files->result;
        }
    }
    public function apiBuilder($method, $params, $addons): string
    {
        //we build  the array  that is need for  the contact with Zabbix
        $array = array();
        $array['jsonrpc'] = '2.0';
        $array['method'] = $method;
        $array['params'] = $params;
        if (is_array($addons)) {
            array_merge($array, $addons);
        }
        $array['auth'] = $this->apitoken;
        $array['id'] = 1;
        //we return  the converted array to json
        return json_encode($array);
    }
    public function get_zabbix_req($method, $params, $addons): object
    {
        // we ask to get our arrays converted to json
        $jsoninfo = $this->apiBuilder($method, $params, $addons);

        // we fire off our json request and then return the  Json decoded content
        $files = json_decode($this->curl_request($jsoninfo));

        return $files;
    }
    public function __destruct()
    {
    }
}