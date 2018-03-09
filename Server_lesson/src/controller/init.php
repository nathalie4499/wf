<?php

require_once __DIR__.'/../../vendor/autoload.php';

//require_once __DIR__.'../Service/DBConnector.php'; =>before autoloader
//$configs = require_once '../../config/app.conf.php'; =>before autoloader

$configs = require __DIR__.'/../../config/app.conf.php';
    
use Service\DBConnector;

//Service\DBConnector::setConfig($configs['db']); =>before autoloader
DBConnector::setConfig($configs['db']);
