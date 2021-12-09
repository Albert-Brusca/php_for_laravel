<?php

namespace Framework;


class Route
{
    protected $routes = [];

    public function register($route)
    {
        $this->routes[] = $route;

    }


    public function define($routes)
    {
        $this->routes = $routes;
        return $this;
    }

    public function redirect($uri)
    {
        if (!array_key_exists($uri,$this->routes)) {
            require 'resources/views/errors/404.php';
            return $this;
        }
        if (!file_exists($this->routes[$uri])) {
            dd("NO s'ha trobat el controlador:" . $this->routes[$uri]);
        }
        require $this->routes[$uri];
        return $this;
    }

}