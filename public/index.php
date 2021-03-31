<?php

require_once '../vendor/autoload.php';

session_start();

$router = new AltoRouter();


if (array_key_exists("BASE_URI" , $_SERVER)) {
    $router->setBasePath($_SERVER["BASE_URI"]);
} else {
    $_SERVER['BASE_URI'] = '/';
}

// Route Mapping

$router->map(
    'GET',
    '/',
    [
        'method' => 'homepage',
        'controller' => '\App\Controller\HomeController',
    ],
    'homepage'
);

$router->map(
    'GET',
    '/connexion',
    [
        'method' => 'showLoginForm',
        'controller' => 'App\Controller\LoginController',
    ],
    'login'
);

$router->map(
    'POST',
    '/connexion',
    [
        'method' => 'sendLoginForm',
        'controller' => 'App\Controller\LoginController'
    ],
    'login-form'
);

$router->map(
    'GET',
    '/deconnexion',
    [
        'method' => 'disconnectUser',
        'controller' => 'App\Controller\LoginController',
    ],
    'logout'
);

$router->map(
    'GET',
    '/profil/[a:username]',
    [
        'method' => 'userShow',
        'controller' => 'App\Controller\UserController'
    ],
    'profil'
);

$match = $router->match();

dd($match);