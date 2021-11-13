<?php

namespace app\core;

class Router
{

    protected $routes = [];
    function __construct()
    {
        
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }
}