<?php


if (Request::method() === 'GET') {
    index();
} else {
    store(App::get('database'), $_POST);
}


function index() {
    $view = 'add';
    require '../core/render.php';
}

function store($db, $data) {
    // connect db and store

    $values = $data;
    $values['vip'] = isset($values['vip']) ? 1 : 0; 
    $db->insert('users', $values);

    // index controller
    require 'index.php';
}