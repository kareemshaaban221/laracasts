<?php

require 'functions/functions.php';
$q = require 'bootstrap.php';

$users = $q->selectAll('users');

require 'views/index.view.php';