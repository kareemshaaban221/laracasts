<?php


if (Request::method() === 'GET') {
    index();
} else {
    store($app, $_POST);
}


function index() {
    $view = 'add';
    require '../core/render.php';
}

function store($app, $data) {
    // connect db and store

    $values = $data;
    $values['vip'] = isset($values['vip']) ? 1 : 0; 
    $app['database']->insert('users', $values);

    // index controller
    require 'index.php';
}