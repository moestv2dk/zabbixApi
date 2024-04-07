<?php

require 'settings.php';
require 'vendor/autoload.php';

use ZbxApi\GetHosts;

$problem = new GetHosts();
$problem->setHostID('10084');
print_r($problem->GetHostInfo());