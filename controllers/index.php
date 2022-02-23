<?php

$users = $app['database']->selectAll('users');

$view = 'index';
require '../core/render.php';
// require 'views/index.view.php';