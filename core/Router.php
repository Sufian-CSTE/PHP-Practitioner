<?php

namespace App\Core;

class Router 
{
    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new Router();
        
        require $file;
        
        return $router;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {

            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );
        }

        throw new Exception("No route found in this uri");
    }

    protected function callAction($controller, $action)
    {
        $controller = "App\\Controllers\\{$controller}";

        $controller = new $controller;

        if (!method_exists($controller, $action)) {
            throw new Exception("Method {$action} does not exist.", 1);
        }
        // die(var_dump($controller->$action()));
        return $controller->$action();
    }
}