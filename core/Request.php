<?php

namespace app\core;


class Request 

{

    public function getPath()
    {
        $requestUri = $_SERVER['REQUEST_URI'] ?? '/';
        $pos = strpos($requestUri, '?');
        if ($pos === false)
        {
            return $requestUri;
        }
        return substr($requestUri, 0, $pos);
    }

    public function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}