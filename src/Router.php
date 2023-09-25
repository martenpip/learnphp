<?php
namespace App;

class Router {
    public static $routes = [];
    public $path;
    public $method;

    public function __construct($path, $method) {
        $this->path = parse_url($path, PHP_URL_PATH);
        $this->method = $method;
    }

    public function match(){
        foreach(self::$routes as $route){
            if(strtolower($route['path']) === strtolower($this->path) && $this->method === $route['method']){
                return $route;
            }
        }
        return false;
    }

    public static function addRoute($method, $path, $action){
        self::$routes[] = [
            'method' => $method,
            'path' => $path,
            'action' => $action
        ]; 
    }

    public static function get($path, $action) {
        self::addRoute('GET', $path, $action);
    }

    public static function post($path, $action) {
        self::addRoute('POST', $path, $action);
    }
}