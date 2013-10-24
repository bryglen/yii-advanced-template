<?php

$environment = require_once(dirname(__FILE__).'/../environment.php');

// change the following paths if necessary
$yiic = dirname(__FILE__) . '/../framework/yiic.php';
$config = dirname(__FILE__) . "/config/console/{$environment}.php";

require_once($yiic);