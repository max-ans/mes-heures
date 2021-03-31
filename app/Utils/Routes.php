<?php

namespace App\Utils;

// Route Mapping

$router->map(
    'GET',
    '/',
    [
        'method' => 'homepage',
        'controller' => '\App\Controllers\HomeController',
    ],
    'homepage'
);

$router->map(
    'GET',
    '/connexion',
    [
        'method' => 'showLoginForm',
        'controller' => '\App\Controllers\LoginController',
    ],
    'login'
);

$router->map(
    'POST',
    '/connexion',
    [
        'method' => 'sendLoginForm',
        'controller' => '\App\Controllers\LoginController'
    ],
    'login-form'
);

$router->map(
    'GET',
    '/deconnexion',
    [
        'method' => 'disconnectUser',
        'controller' => '\App\Controllers\LoginController',
    ],
    'logout'
);

$router->map(
    'GET',
    '/profil/[a:username]',
    [
        'method' => 'userShow',
        'controller' => '\App\Controllers\UserController'
    ],
    'profil'
);