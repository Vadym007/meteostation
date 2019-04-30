<?php
session_start(); 
require __DIR__.'/../vendor/autoload.php';

use App\Core\Router;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

const TOKEN = '844981219:AAGKuAVfbzzhgstQ3yy8sTVVeC6I6ZWJCEc';
const SITE = 'https://diplomastation.000webhostapp.com/';

$routes = require_once __DIR__ . '/../config/routes.php';
$router = new Router($routes);
$router->run();



