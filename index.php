<?php

namespace test;
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
define('PROJECTROOT', dirname(__FILE__));
require_once('lib/' . __NAMESPACE__ . '/Loader.php');
Loader::init();

$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';
S('Config')->set($host);

S('Application')->run();
