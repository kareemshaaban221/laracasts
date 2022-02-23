<?php

require '../functions/functions.php';
require '../core/bootstrap.php';

// jeffery routes


/* this class in Router.php file
 * that is included in bootstrap.php file.
 */
// $router = new Router;

// require 'routes.php'; // load method instead

// fetching the uri

// $uri = trim($_SERVER['REQUEST_URI'], '/');

// require $router->direct($uri);

// Or

// dd($app);

require Router::load('routes.php') -> direct(
    Request::uri(), Request::method()
);


// my first routes with my understanding!!
// $routes = require 'routes.php';
// $uri = 'gfsadga';
// $uri = trim($_SERVER['REQUEST_URI'], '/');

// $file = isset($routes[$uri]) ? $routes[$uri] : NULL;

// if (file_exists($file)) require $routes[$uri];
// else throw new Exception('Invalid Routes');