<?php

require 'settings.php';
require 'vendor/autoload.php';

use ZbxApi\ApiCalls;

$problem = new ApiCalls();
echo json_encode($problem->findFunction('host.get', [ "hostids" => '' ]), JSON_PRETTY_PRINT);
