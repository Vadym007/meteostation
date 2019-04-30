<?php

namespace App\Core;

class Router {
    private $routes;
 
    function __construct($routes){
        // Получаем конфигурацию из файла.
        $this->routes = $routes;
    }
 
    function getURI(){
        if(!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
 
        if(!empty($_SERVER['PATH_INFO'])) {
            return trim($_SERVER['PATH_INFO'], '/');
        }
 
        if(!empty($_SERVER['QUERY_STRING'])) {
            return trim($_SERVER['QUERY_STRING'], '/');
        }
    }
 
    function run(){
        $uri = $this->getURI();
 
        foreach($this->routes as $route){

            if($route['url'] == $uri){

                $segments = explode('@', $route['action']);
                $controller = $segments[0];
                $action = $segments[1];
                $controllerName = '\App\Controllers\\' . $controller;
                $controllerFile = __DIR__ .'/../Controllers/'.$controller.'.php';

                if(file_exists($controllerFile)){
                    include($controllerFile);
                }
 
                if(!is_callable(array(new $controllerName, $action))){
                    header("HTTP/1.0 404 Not Found");
                    return;
                }
 
                call_user_func_array([new $controllerName, $action], []);
                die;
            }
        }
 
        header("HTTP/1.0 404 Not Found");
        return;
    }
}