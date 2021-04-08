<?php

namespace App\Controllers;

class ErrorController extends MainController
{
    public function error () 
    {
        return $this->render('errors/err404.tpl.php');
    }
}