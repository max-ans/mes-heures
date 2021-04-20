<?php

namespace App\Controllers;

class ErrorController extends MainController
{
    public function error () 
    {
        http_response_code(404);
        return $this->render('errors/err404.tpl.php');
    }
}