<?php

namespace App\Core\Models;

use PDO;
use PDOException;

class Connection{
    public static function make($config) {
        try {
            $dsn        = $config['type'] . ':host=' . $config['host'] . ';dbname=' . $config['name'];
            $username   = $config['username'];
            $password   = $config['password'];
            return new PDO( $dsn, $username, $password, $config['options'] );
        } catch (PDOException $e) {
            die( $e->getMessage() );
        }
    }
}