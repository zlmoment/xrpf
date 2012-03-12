<?php

header('Content-Type: text/html; charset=utf-8');

define('THINK_PATH','./Core');
define('APP_NAME', 'Index');
define('APP_PATH', './Index');

require(THINK_PATH.'/ThinkPHP.php');

App::run();
?>