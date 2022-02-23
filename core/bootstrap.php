<?php

require 'Router.php';
require 'Request.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';

$app['config'] = (require '../config/config.php') ['database'];

$app['database'] = new QueryBuilder(
    Connection::make($app['config'])
);