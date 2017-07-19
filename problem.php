<?php
class problem{
    private $Zapi = '';
    private $Tid = ''; // TRIGGER ID
    private $Hid = ''; //host ID
    private $Info = ''; 
    private $zProxy = ''; // proxy call
    private $zHost = ''; // zabbix host call
    private $Tval = ''; // trigger Value
    private $Ack = ''; // is acknowledged
    private $AckHist = ''; // history
    function __construct(){
        global $ZabbixApi;
        $this->Zapi = $ZabbixApi;
        $method = 'host.get';
        $params = array('output'=> 'extend','triggerids' => $this->Tid);
        $addons = '';
        $this->zHost = $this->Zapi->get_zabbix_req($method,$params,$addons);
              }
    function isproxy($proxy = ''){
        //Put in Host ID and see if it is a proxy 
        $method = 'host.get';
        $params = array('output'=> ['hostid'],'proxy_hosts' => 1);
        $addons = '';
        $this->zProxy = $this->Zapi->get_zabbix_req($method,$params,$addons);
        foreach($this->zProxy->result as $key => $value){
            if($value->hostid == $proxy){
                return true;
            }
        }
        return false;
    }
    function triggered_by_proxy($triggerId){
        // find if proxy is not empty
        if($this->zHost->result[0]->proxy_hostid != 0 ){
            $method = 'trigger.get';
            $params = array('output'=>'extend','hostids' => $this->zHost->result[0]->proxy_hostid,'filter' =>array('status'=>0,'priority'=> 5),'only_true'=>'1' );
            $addons = '';
            $zProxyTriggers = $this->Zapi->get_zabbix_req($method,$params,$addons);
            foreach($zProxyTriggers->result as $key => $value){        
                if($value->triggerid == $triggerId){
                    return true;
                    break;
                }
            }
        }else{
            return false;
        }
    }
    function __destruct(){
    }
}
