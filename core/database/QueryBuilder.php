<?php

namespace App\Core\Models;

use App\Core\Request;
use PDO;

class QueryBuilder{

    protected $pdo;

    function __construct($pdo) {
        $this->pdo = $pdo;
    }

    function selectAll($table){
        $statement = $this->pdo->prepare("SELECT * FROM $table");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    function insert($table, Request $values){

        // my code before watching video 20
        // $last = array_pop($values);
        // $values = "'" . implode("', '", $values) . "', $last";
        // $q = "INSERT INTO $table(fname, lname, email, `password`, vip) VALUES($values)";

        $values = $values->getRequest();

        $cols = array_keys($values);
        $q = sprintf(
            "INSERT INTO %s (%s) VALUES (%s)",
            $table,
            implode(', ', $cols),
            ':' . implode(', :', $cols)
        );

        // dd($q); // for test

        $statement = $this->pdo->prepare($q);

        return $statement->execute($values);

    }

}