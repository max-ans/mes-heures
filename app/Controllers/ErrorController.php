<?php

namespace App\Controllers;

class ErrorController extends MainController
{

    private $router;

    public function __construct($router)
    {
        $this->router = $router;
    }

    public function error () 
    {
        $this->render('errors/err404.tpl.html');
    }
}