<?php

namespace app\core;

class Router
{

    protected array $routes = [];
    public Request $request;
    function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $method = $this->request->getMethod();
        $path = $this->request->getPath();
        $callback = $this->routes[$method][$path] ?? false;
        if ($callback === false)
        {
            echo 'Route not found. Try another one';
            exit;
        }
        echo call_user_func($callback);
    }
}