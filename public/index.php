<?php
session_start(); 

use App\Components\Config;

//vendor autoload
require __DIR__.'/../vendor/autoload.php';

//debug
if(Config::get('app.debug')) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
} 

$routes = Config::all('routes');
$router = new App\Core\Router($routes);
$router->run();



