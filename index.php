<?php
// call  index.php?state={your query}
ini_set('display_errors',1);
ini_set( 'date.timezone', 'UTC' );
global $ZabbixApi,$zabbixUser,$zabbixPass,$zabbixHost,$zabbixUrl,$Groupids;
require_once('settings.php');
require_once('zabbixapi.php');
require_once('problem.php');
if(!$_GET['state']){
    die();
}else{
	eval("new ".strtolower($_GET['state'])."();");
}
