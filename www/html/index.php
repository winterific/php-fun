<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);
date_default_timezone_set('America/New_York');

define('SRC', getcwd().'/../src');
define('VIEWS', SRC.'/views');

include SRC.'/init.php';
include SRC.'/routes.php';
