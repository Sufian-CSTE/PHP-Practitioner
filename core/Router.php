<?php

class Router 
{
    protected $routes = [];

    public static function load($file)
    {
        $router = new Router();
        
        require $file;
        
        return $router;
    }

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            // die(var_dump($this->routes[$uri]));
            return $this->routes[$uri];
        }

        throw new Exception("No route found in this uri");
    }
}