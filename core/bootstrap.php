<?php

// autoloader replace them ----------
// require 'Router.php';
// require 'Request.php';
// require 'database/Connection.php';
// require 'database/QueryBuilder.php';

// $app['config'] = (require '../config/config.php') ['database'];


// dependency injection (No includes because we use autoloader)
App::bind( 'config', $config = (require '../config/config.php') ['database'] );

App::bind( 'database', new QueryBuilder(
    Connection::make($config)
) );

// $app['database'] = new QueryBuilder(
//     Connection::make($app['config'])
// );