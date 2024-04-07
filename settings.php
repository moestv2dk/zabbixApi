<?php

//API User
if(!defined('ZABBIXUSER')) {
    define('ZABBIXUSER', 'Admin');
}
//API Password

if(!defined('ZABBIXPASS')) {
    define('ZABBIXPASS', 'zabbix');
}
//Going version 6.4 and above Zabbbix token is used
if(!defined('ZABBIXTOKEN')) {
    define('ZABBIXTOKEN', 'aeffcfb8c99222f51054adbf506b7cb5cf9f9bdf7d8c563d150c980ce08cecfa');
}
/**
 *  The zabbix host (can be used for rewrite if  the name differ from Zabbix Url
 *  e.g. you contact  the zabbix Server via Localhost, but you have an external URL for systems  )
 */
if (!defined('ZABBIXHOST')) {
    define('ZABBIXHOST', 'http://192.168.122.40');
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
    define('ZABBIXURL', 'http://192.168.122.40/api_jsonrpc.php');
}
//Can beused if  you only want to get hosts from specific group

if(!defined('ZABBIXGROUP')) {
    define('ZABBIXGROUP', '');
}