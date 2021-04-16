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
    'POST',
    '/',
    [
        'method' => 'homepage',
        'controller' => '\App\Controllers\HomeController',
    ],
    'homepage-test'
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
    '/inscription',
    [
        'method' => 'showRegistrationForm',
        'controller' => '\App\Controllers\RegistrationController'
    ],
    'registration'
);

$router->map(
    'POST',
    '/inscription',
    [
        'method' => 'sendRegistrationForm',
        'controller' => '\App\Controllers\RegistrationController'
    ],
    'registration-form'
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
    '/profil/modification/[*:nickname]',
    [
        'method' => 'showEditForm',
        'controller' => '\App\Controllers\UserController'
    ],
    'profil-edit'
);

$router->map(
    'POST',
    '/profil/modification/[*:nickname]',
    [
        'method' => 'sendEditForm',
        'controller' => '\App\Controllers\UserController'
    ],
    'profil-form'
);

$router->map(
    'GET',
    '/profil/[*:nickname]',
    [
        'method' => 'userShow',
        'controller' => '\App\Controllers\UserController'
    ],
    'profil'
);

$router->map(
    'GET',
    '/tableau/[i:id]',
    [
        'method' => 'tableShow',
        'controller' => '\App\Controllers\TableController'
    ],
    'table-single'
);

$router->map(
    'POST',
    '/tableau',
    [
        'method' => 'tablePost',
        'controller' => '\App\Controllers\TableController'
    ],
    'table-post'
);