<?php


class App {

    public static $dependencies = [];

    public static function bind($key, $value) {

        static::$dependencies[$key] = $value;

    }

    public static function get($key) {

        if ( array_key_exists($key, static::$dependencies) ){
            return static::$dependencies[$key];
        }

        throw new Exception("This dependency NOT exists!");

    }

}