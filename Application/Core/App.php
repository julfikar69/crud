<?php

namespace Application\Core;

class App
{
    protected $controller = 'Transaksi';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseURL();
        
        if (isset($url[0]) && file_exists('../Application/Controllers/' . $url[0] .'Controller.php')){
            $this->controller = $url[0];
            unset($url[0]);
        }

        $this->controller = '\Application\Controllers\\'.$this->controller.'Controller';
        $this->controller = new $this->controller;

        if (isset($url[1]) && method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
        }

        if (!empty($url)){
            $this->params = array_values($url);
        }

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
