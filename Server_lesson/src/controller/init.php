<?php 
require_once __DIR__.'../Service/DBConnector.php';
$configs = require_once '../../config/app.conf.php';
use Service\DBConnector;
Servide\DBConnector::setConfig($configs['db']);
?>