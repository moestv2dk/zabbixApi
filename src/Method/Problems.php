<?php

namespace ZbxApi;

use ZbxApi\Api\ZbxApi as ZabbixApi;

class Problems
{
    private $Zapi = '';
    private $Tid = ''; // TRIGGER ID
    private $zProxy = ''; // proxy call
    private $zHost = ''; // zabbix host call


    public function __construct()
    {
        $this->Zapi = new  ZabbixApi();
    }
    public function getHost()
    {
        $method = 'host.get';
        $params = array(
          'output' => 'extend',
          'triggerids' => $this->getTid()
        );
        $addons = '';
        $this->zHost = $this->Zapi->getZabbixReq($method, $params, $addons);
        return $this->zHost;
    }
    public function isProxy($proxy = '')
    {
        //Put in Host ID and see if it is a proxy
        $method = 'host.get';
        $params = array('output' => ['hostid'], 'proxy_hosts' => 1);
        $addons = '';
        $this->zProxy = $this->Zapi->getZabbixReq($method, $params, $addons);
        foreach ($this->zProxy->result as $key => $value) {
            if ($value->hostid == $proxy) {
                return true;
            }
        }
        return false;
    }

    public function triggered_by_proxy($triggerId)
    {
        // find if proxy is not empty
        if ($this->zHost->result[0]->proxy_hostid != 0) {
            $method = 'trigger.get';
            $params = array(
              'output' => 'extend',
              'hostids' => $this->zHost->result[0]->proxy_hostid,
              'filter' => array('status' => 0, 'priority' => 5),
              'only_true' => '1'
            );
            $addons = '';
            $zProxyTriggers = $this->Zapi->getZabbixReq($method, $params, $addons);
            foreach ($zProxyTriggers->result as $key => $value) {
                if ($value->triggerid == $triggerId) {
                    return true;
                    break;
                }
            }
        } else {
            return false;
        }
    }

    public function __destruct()
    {
    }

    /**
     * Get the value of Tid
     */
    public function getTid()
    {
        return $this->Tid;
    }

    /**
     * Set the value of Tid
     *
     * @return  self
     */
    public function setTid($Tid)
    {
        $this->Tid = $Tid;

        return $this;
    }
}
