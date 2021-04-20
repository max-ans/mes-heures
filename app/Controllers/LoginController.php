<?php

namespace App\Controllers;

use App\Models\User;

class LoginController extends MainController
{
    public function showLoginForm ()
    {

        if (!isset($_SESSION['connectedUser'])) {
            $viewDatas = [
                'token' => $this->getTokenCsrf(),
            ];
    
            
            return $this->render('login/loginForm.tpl.php', $viewDatas);
        }

        return $this->redirectTo('profil', $_SESSION['connectedUser']->getNickname());

    }

    public function sendLoginForm () 
    {
        
        $email = trim(filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL));
        $password =filter_input(INPUT_POST, 'password');
        $token = filter_input(INPUT_POST, 'token', FILTER_SANITIZE_STRING);
       

        $errorsList = [];
        $user = User::findByEmail($email);

        if(empty($token) || $token != $_SESSION['csrfToken']){
            $errorsList[] = "Erreur CSRF !";
        }

        if(!$user) {
            $errorsList[] = "Aucun compte connu à cette adresse";
        };

        if (empty($errorsList)) {

            if (password_verify($password, $user->getPassword())){

                // cleaning session and messages
                unset($_SESSION['registerMessage']);
                unset($_SESSION['csrfToken']);
                $errorsList = [];

                $_SESSION['connectedUser'] = $user;

                
                return $this->redirectTo('profil', $user->getNickname());

            } else {
                $errorsList[] = "Email ou mot de passe invalide";
                
                $viewDatas = [
                    'errorsList' => $errorsList,
                    'oldValues' => [
                        'oldToken' => $token,
                        'oldEmail' => $email
                    ]
                ];
    
                return $this->render('login/loginForm.tpl.php', $viewDatas );
            }
        } else {
            
            $viewDatas = [
                'errorsList' => $errorsList,
                'oldValues' => [
                    'oldToken' => $token,
                    'oldEmail' => $email
                ]
            ];

            return $this->render('login/loginForm.tpl.php', $viewDatas );
        }
    }

    public function disconnectUser () 
    {
        unset($_SESSION['connectedUser']);

        return $this->redirectTo('homepage');
    }
}