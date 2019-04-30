<?php
session_start(); 

//vendor autoload
require __DIR__.'/../vendor/autoload.php';

//env variables

if(file_exists($file = __DIR__.'/../env.php')) {
    include $file;
}

if( getenv('STATION_TOKEN') ) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
} 

$routes = require_once __DIR__ . '/../config/routes.php';
$router = new App\Core\Router($routes);
$router->run();



