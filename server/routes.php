<?php

// jeffery routes


// old version
// $router->define([

//     '' => 'controllers/index.php',
//     'contact' => 'controllers/contact.php',
//     'about' => 'controllers/about.php',
//     'add' => 'controllers/add.php' // we need this route for post requests only

// ]);

// new version
$router->get('', 'controllers/index.php');
$router->get('contact', 'controllers/contact.php');
$router->get('about', 'controllers/about.php');
$router->get('add', 'controllers/add.php');
$router->post('add', 'controllers/add.php');

// testing
// dd($router->routes());
// die;

// my routes
// return [

//     '' => 'controllers/index.php',
//     'contact' => 'controllers/contact.php',
//     'about' => 'controllers/about.php'

// ];