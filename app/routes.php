<?php

$router->get('', 'PagesController@home');
$router->get('contact', 'PagesController@contact');
$router->get('about', 'PagesController@about');

$router->get('users', 'UsersController@index');
$router->get('users/add', 'UsersController@create');
$router->post('users', 'UsersController@store');