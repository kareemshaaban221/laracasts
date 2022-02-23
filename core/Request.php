<?php

class Request {
    
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