<?php

require_once '../vendor/autoload.php';

session_start();

$router = new AltoRouter();


if (array_key_exists("BASE_URI" , $_SERVER)) {
    $router->setBasePath($_SERVER["BASE_URI"]);
} else {
    $_SERVER['BASE_URI'] = '/';
}

// import routes
require_once '../app/Utils/Routes.php';


$match = $router->match();

$dispatcher = new Dispatcher(
    $match,
    'App\Controllers\ErrorController::error'
);

$dispatcher->setControllersNamespace('App\Controllers');
$dispatcher->setControllersArguments($router);

if (!empty($match['params'])) {
   $dispatcher->setControllersArguments($router, $match['params']);
}

$dispatcher->dispatch();

