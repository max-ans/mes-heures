<?php

namespace App\Controllers;

class LoginController extends MainController
{
    public function showLoginForm ()
    {
        $this->render('login/loginForm.tpl.php');
    }

    public function sendLoginForm () 
    {
        dump($_POST);
    }
}