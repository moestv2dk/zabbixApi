<?php

namespace ZbxApi;

use ZbxApi\Api\ZbxApi;

class GetHosts
{
    private $hostID;
    private $groupids = '';
    private $zHosts;
    private $usermacroValue;
    private $usermacroReplace;
    private $Zapi;
    private $method;
    public function __construct()
    {
        $this->Zapi = new ZbxApi();
        $this->method = 'host.get';
    }

    public function GetHostInfo()
    {
        $params = array(
            'output' => 'extend',
            "hostids" => $this->getHostID(),
            "selectInventory" => 'extend',
            "selectGroups" => 'extend',
            "selectParentTemplates" => 'extend',
            "selectTags" => 'extend'
        );
        $addons = '';
        //Get the zabbix Hosts
        $this->zHosts = $this->Zapi->GetRequest($this->method, $params, $addons);
        // if we cant get a host we die.

        if (empty($this->zHosts->result)) {
            return   (object)  array(
                'error ' => 'Host id ' . $this->getHostID() . 'not present',
                'zabbix' => '' . $this->zHosts->result . '',
            );
        } else {
            return $this->zHosts;
        }
    }
    public function getMacros(): array
    {
        $search = array();
        $replace = array();
        //Load User Macros
        $method = 'usermacro.get';
        $params = array('output' => 'extend', 'hostids' => $this->hostID);
        $addons = '';
        //get  the user macros for  translation
        $this->zMacro = $this->Zapi->GetRequest($method, $params, $addons);
        $this->usermacroValue = array();
        $this->usermacroReplace = array();
        // translate from Zabbix To search and replace
        foreach ($this->zMacro->result as $key => $value) {
            if (trim($value->value) != '') {
                $search['search'][] = $value->macro;
                $replace['replace'][] = "$value->value";
            }
        }
        $method = 'usermacro.get';
        $params = array('output' => 'extend', "globalmacro" => true);
        //get the global macros
        $this->zMacros = $this->Zapi->GetRequest($method, $params, $addons);

        // translate from Zabbix To search and replace
        foreach ($this->zMacros->result as $key => $value) {
            $search['search'][] = $value->macro;
            $replace['replace'][] = "$value->value";
        }
        $this->setUsermacroValue($search);
        $this->setUsermacroReplace($replace);
    }

    /**
     * Get the value of hostID
     */
    public function getHostID()
    {
        return $this->hostID;
    }

    /**
     * Set the value of hostID
     *
     * @return  self
     */
    public function setHostID($hostID = '')
    {
        if ($hostID == '') {
        } else {
            $this->hostID = $hostID;
        }
        return $this;
    }

    /**
     * Get the value of groupids
     */
    public function getGroupids()
    {
        return $this->groupids;
    }

    /**
     * Set the value of groupids
     *
     * @return  self
     */
    public function setGroupids($groupids)
    {
        $this->groupids = $groupids;
        return $this;
    }

    /**
     * Get the value of usermacroValue
     */
    public function getUsermacroValue()
    {
        return $this->usermacroValue;
    }

    /**
     * Set the value of usermacroValue
     *
     * @return  self
     */
    public function setUsermacroValue($usermacroValue)
    {
        $this->usermacroValue = $usermacroValue;

        return $this;
    }

    /**
     * Get the value of usermacroReplace
     */
    public function getUsermacroReplace()
    {
        return $this->usermacroReplace;
    }

    /**
     * Set the value of usermacroReplace
     *
     * @return  self
     */
    public function setUsermacroReplace($usermacroReplace)
    {
        $this->usermacroReplace = $usermacroReplace;

        return $this;
    }
}
