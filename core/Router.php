<?php

namespace App\Core;

use Exception;

class Router {

    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file) {
        $router = new self; // self or static

        /* dd() accessible because this method called in
         * index file that contains funcitons file
         */
        // dd($router);

        require $file;

        // dd($router);

        return $router;//Router Object
    }

    public function define($routes) {
        $this->routes = $routes;
    }

    public function get($url, $controller) {
        $this->routes['GET'][$url] = $controller;
    }

    public function post($url, $controller) {
        $this->routes['POST'][$url] = $controller;
    }

    public function direct($uri, $method) {

        if (array_key_exists($uri, $this->routes[$method])) { // instead of is set
            return $this->callPage( $method,
                ...explode('@', $this->routes[$method][$uri]) // PageController@home => (PageController, home)
            ); // controller !!
        }

        return $this->callPage($method, 'PagesController', 'notFound'); // then this is controller

    }

    public function routes() {
        return $this->routes;
    }

    protected function callPage($method, $controller, $page) {

        $controller = "App\\Controllers\\$controller";

        $controller = new $controller;

        if ( method_exists($controller, $page) ) {

            if ($method === 'POST')
                return $controller->$page( new Request() );
            
            return $controller->$page();

        }

        throw new Exception("This ". get_class($controller) ." don't have $page action page!!");
        
    }

}