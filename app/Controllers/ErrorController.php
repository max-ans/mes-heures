<?php

namespace App\Controllers;

class ErrorController extends MainController
{
    public function error () 
    {
        $this->render('errors/err404.tpl.php');
    }
}