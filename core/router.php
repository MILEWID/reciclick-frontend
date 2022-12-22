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

        $this->controller = $url[0] ?? "home";
        $this->method = !empty($url[1]) ? str_replace('-', '_', $url[1]) : "index";

        if (isset($url[0]) && !isset($url[1])) {
            $this->controller = "home";
            $this->method = !empty($url[0]) ? str_replace('-', '_', $url[0]) : "index";
        }

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
            // call_user_func
            $controller->$method();
        } else {
            echo "Error 500 no existe el método <b>$method</b>, en el controlador {$this->controller}";
            die;
        }
    }
}
