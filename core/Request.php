<?php

namespace App\Core;

use Exception;

class Request {

    /* 
     * Added by me to simulate the behavior of laravel
     */

    protected $request = [];

    public function __construct() {
        $this->request = $_REQUEST;
    }

    public function __set($name, $val) {
        $this->request[$name] = $val;
    }

    public function __get($name) {

        if ( isset($this->request[$name]) ) {
            return $this->request[$name];
        }

        throw new Exception("$name does NOT exist in the request");

    }

    public function __isset($name) {
        return isset($this->request[$name]);
    }

    public function getRequest(){
        return $this->request;
    }

    /**** the End of my additions ****/
    
    public static function uri() {
        // return trim($_SERVER['REQUEST_URI'], '/'); // old version


        // TO handle GET requests and remove parameters
        return trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'
        );
    }

    public static function method() {
        return $_SERVER['REQUEST_METHOD'];
    }

}