# zabbixApi

This for communication to the zabbix API via PHP
To get this to work the following Constants has to be set

```
ZABBIXTOKEN
ZABBIXHOST
```

# Structure

The structure is PSR-4 based.
The basic of this library is teh API call is performed via the src/Api/ZbxApi and the  src/Method if for the calls.
In the src/Help/ there is a HelpClass that you can use to see the parameters Zabbix takes for each function in the api.

NOTE !!! This is Work in progress!!!
This the Generation of those calls can also be done  in src/Method/CustomCalls.php, where you can fill out the corresponding parameters in the call.

```
use ZbxApi\Help;
$problem = new HelpCalls();
print_r($problem->action_get());
```

This will return

```
Array ( [method] => action.get [params] => Array ( [filter] => Array ) )
```

wich in json is

```
{"method":"action.get","params":{"filter":"Array"}}
```

So you can modify the Json directly or you can fill out the parameters needed in CustomCalls that has the same name but each parameter in "Params" is a parameter in the call. BUT you don have to fill out each parameter as if it is no set it wont be returned.

```
use ZbxApi;
$problem = new CustomCalls();
print_r($problem->action_get(array( "ids" => 1 )));
```  
