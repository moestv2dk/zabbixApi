<?php

//API User
if(!defined('ZABBIXUSER')) {
    define('ZABBIXUSER', '');
}
//API Password

if(!defined('ZABBIXPASS')) {
    define('ZABBIXPASS', '');
}
//Goin version 6.4 and above Zabbbix token is used

if(!defined('ZABBIXTOKEN')) {
    define('ZABBIXTOKEN', '');
}
/**
 *  The zabbix host (can be used for rewrite if  the name differ from Zabbix Url
 *  e.g. you contact  the zabbix Server via Localhost, but you have an external URL for systems  )
 */
if (!defined('ZABBIXHOST')) {
    define('ZABBIXHOST', '');
}
/**
 *
 *  Zabbix Url for calling the JSON API
 *  examples are
 * 'http://localhost/zabbix/api_jsonrpc.php';
 * 'http://localhost/api_jsonrpc.php';
 * 'https://[yourdomain]/api_jsonrpc.php';
 */

if(!defined('ZABBIXURL')) {
    define('ZABBIXURL', '');
}
//Can beused if  you only want to get hosts from specific group

if(!defined('ZABBIXGROUP')) {
    define('ZABBIXGROUP', '');
}
