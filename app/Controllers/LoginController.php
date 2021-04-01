<?php

namespace App\Controllers;

class LoginController extends MainController
{
    public function showLoginForm ()
    {

        $viewDatas = [
            'token' => $this->getTokenCsrf(),
        ];

        
        $this->render('login/loginForm.tpl.php', $viewDatas);
    }

    public function sendLoginForm () 
    {
        dump($_POST);
    }

    public function disconnectUser () 
    {
        dump($_GET);
    }
}