<?php

namespace App\Controllers;

use App\Models\User;

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
        
        $email = trim(filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL));
        $password =filter_input(INPUT_POST, 'password');
        $token = filter_input(INPUT_POST, 'token', FILTER_SANITIZE_STRING);
       

        $errorsList = [];
        $user = User::findByEmail($email);

        if ($user) {

            if (password_verify($password, $user->getPassword())){

                // cleaning session and messages
                unset($_SESSION['registerMessage']);
                $errorsList = [];

                // $_SESSION['connectedUser'] = $user;

                
                $this->redirectTo('profil', $user->getNickname());

            } else {
                $errorsList[] = "Email ou mot de passe invalide";
                
                $viewDatas = [
                    'errorsList' => $errorsList,
                    'oldValues' => [
                        'oldToken' => $token,
                        'oldEmail' => $email
                    ]
                ];
    
                $this->render('login/loginForm.tpl.php', $viewDatas );
            }
        } else {
            
            $errorsList[] = "Aucun compte connu à cette adresse";

            $viewDatas = [
                'errorsList' => $errorsList,
                'oldValues' => [
                    'oldToken' => $token,
                    'oldEmail' => $email
                ]
            ];

            $this->render('login/loginForm.tpl.php', $viewDatas );
        }
    }

    public function disconnectUser () 
    {
        dump($_GET);
    }
}