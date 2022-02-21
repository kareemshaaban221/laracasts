<?php


class Router {

    protected $routes = [];

    public static function load($file){
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

    public function direct($uri) {
        if (array_key_exists($uri, $this->routes)){ // instead of is set
            return $this->routes[$uri]; // controller !!
        }

        return 'controllers/notFound.php'; // then this is controller
    }

}