<?php
class Router
{
    private $controller;
    private $method;

    public function __construct()
    {
        $this->matchRoute();
    }

    public function matchRoute()
    {
        $url = explode('/', trim(URL, '/'));
        $this->controller = $url[0] ?? "";
        $this->method = $url[1] ?? "";

        $this->controller = $this->controller . "Controller";
        $path = "controllers/" . $this->controller . ".php";

        if (file_exists($path)) {
            require_once($path);
        } else {
            echo "Error 500 el controlador <strong>{$this->controller}</strong> no existe";
            die;
        }
    }

    public function run()
    {
        $controller = new $this->controller();
        $method = $this->method;
        if (method_exists($this->controller, $method)) {
            $controller->$method();
        } else {
            echo "Error 500 no existe el método <b>$method</b>, en el controlador {$this->controller}";
            die;
        }
    }
}
