<?php

class Router {

    private $routes = [];

    public function get($url,$action){
        $this->routes[$url]=$action;
    }

    public function dispatch($url){

        $path=parse_url($url,PHP_URL_PATH);

        if(array_key_exists($path,$this->routes)){

            $action=$this->routes[$path];

            list($controller,$method)=explode('@',$action);

            $controller=new $controller();

            $controller->$method();

        } else {

            echo "404 Page introuvable";
        }
    }
}