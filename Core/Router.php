<?php

namespace Core;

class Router {

    protected $routes = [
        'GET' => [],
        'POST' => [],
    ];
    
    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }
    
    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }

    public function direct($uri,$requestType)
    {
        if  ( array_key_exists($uri, $this->routes[$requestType])) {
            return $this->callAction(
                ...explode('@',$this->routes[$requestType][$uri])
            );
        } else {
            die('<h1 style="padding:20% 48%">Error404</h1>');
        }   
    }

    public function callAction($controller, $action)
    {
        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;
        if ( !method_exists($controller, $action)) {
            die('No action defined for the request');
        }

        return $controller->$action();
    }
}