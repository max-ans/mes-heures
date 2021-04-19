<?php

namespace App\Controllers;

use App\Models\Table;
use App\Models\User;
use App\Utils\Authentication;

class UserController extends MainController
{
    public function userShow($nickname)
    {      
        unset($_SESSION['success']);  
        $user = User::findByNickname($nickname);
       
        if ($user) {

            $authenticator = new Authentication($this->router);
    
            if ($authenticator->checkAuthentication($user)) {

                $tables = Table::findAllByUserId($user->getId());

                $viewDatas = [
                    'user' => $user,
                    'tables' => $tables
                ];
        
                return $this->render('user/show.tpl.php', $viewDatas);
    
            }
        } else {

            http_response_code(404);

            return $this->render('errors/err404.tpl.php');
        }
    
        
    }

    public function showEditForm($nickname)
    {
        $user = User::findByNickname($nickname);
        
        if ($user) {

            $authenticator = new Authentication($this->router);

            if ($authenticator->checkAuthentication($user)) {
                $viewDatas = [
                    'user' => $user,
                    'token' => $this->getTokenCsrf()
                ];
                
                return $this->render('user/edit.tpl.php', $viewDatas);
            }
                
        } else {
            http_response_code(404);
            return $this->render('errors/err404.tpl.php');
        }
        
 
    }

    public function sendEditForm($nickname) {

        $user = User::findByNickname($nickname);
        
        if ($user) {
            
            $authenticator = new Authentication($this->router);
            
            if ($authenticator->checkAuthentication($user)) {
                
                
                $email = trim(filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL));
                $userNickname = filter_input(INPUT_POST, 'pseudo', FILTER_SANITIZE_STRING);
                $oldPassword = filter_input(INPUT_POST, 'old__password');
                $newPassword = filter_input(INPUT_POST, 'password');
                $repeatedPassword = filter_input(INPUT_POST, 'repeated__password');
                $token = filter_input(INPUT_POST, 'token', FILTER_SANITIZE_STRING);

                $errorsList = [];
                $passwordValidation = '#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#';
                $alreadyExistEmail = User::findByEmail($email);
                $alreadyExistNickname = User::findByNickname($userNickname);
               
                if ($userNickname !== $user->getNickname()) {
                    
                    if ($alreadyExistNickname) {
                        $errorsList[] = "Ce pseudo est déjà utilisé, veuillez en choisir un autre";
                        
                    }
                }

                if ($email !== $user->getEmail()) {
                    if ($alreadyExistEmail) {
                        $errorsList[] = "Un compte existe déjà avec cette adresse, veuillez vous connecter";
                    }
                    if ($email === ""){
                        $errorsList[] = "L'adresse email est invalide";
                    }
                }

                if(empty($token) || $token != $_SESSION['csrfToken']){
                    $errorsList[] = "Erreur CSRF !";
                }

                if (!empty($newPassword) || !empty($oldPassword) || !empty($repeatedPassword)) {
                    
            
                    if (!preg_match($passwordValidation, $newPassword)) {
                        $errorsList[] = 'Le nouveau mot de passe ne respecte pas les règles de sécurité';
                    }
            
                    if ($newPassword !== $repeatedPassword) {
                        $errorsList[] = 'Les deux champs de mot de passe doivent correspondre';
                    }
                    
                    if (!password_verify($oldPassword, $user->getPassword())) {
                        $errorsList[] = "Vous devez fournir un ancien mot de passe valide afin de modifier votre mot de passe";
                    }

                    if (empty($errorsList)) {

                        $user->setEmail($email);
                        $user->setNickname($userNickname);
                        $user->setPassword(password_hash($newPassword, PASSWORD_DEFAULT));
                        $result = $user->update($user->getID());

                        if ($result) {
                            unset($_SESSION['csrfToken']);
                            $errorsList = [];
                            $_SESSION['success'] = "Vos modifications ont bien été prises en compte";
                            $_SESSION['connectedUser'] = $user;

                            return $this->redirectTo('profil-edit', $user->getNickname());

                        } else {
                            $errorsList[] = "Une erreur a eu lieu lors de la modification, veuillez réessayer ultérieurement";

                            $viewDatas = [
                                'errorsList' => $errorsList,
                                'user'       => $user,
                                'oldValues'  => [
                                    'oldToken' => $token,
                                    'oldEmail' => $email,
                                    'oldNickname' => $userNickname,
                                ]
                            ];
        
                            $this->render('user/edit.tpl.php', $viewDatas);
                        } 
                    }
                }
         
                if (empty($errorsList)) {
                    $user->setEmail($email);
                    $user->setNickname($userNickname);
                    
                    
                    $result = $user->update($user->getID());
                    
                    if ($result) {
                        unset($_SESSION['csrfToken']);
                        $errorsList = [];
                        $_SESSION['connectedUser'] = $user;
                        
                        $_SESSION['success'] = "Vos modifications ont bien été prises en compte";
                       

                        return $this->redirectTo('profil-edit', $user->getNickname());


                    } else {
                        $errorsList[] = "Une erreur a eu lieu lors de la modification, veuillez réessayer ultérieurement";

                        $viewDatas = [
                            'errorsList' => $errorsList,
                            'user'       => $user,
                            'oldValues'  => [
                                'oldToken' => $token,
                                'oldEmail' => $email,
                                'oldNickname' => $userNickname,
                            ]
                        ];
    
                        $this->render('user/edit.tpl.php', $viewDatas);
                    }

                } else {

                    $viewDatas = [
                        'errorsList' => $errorsList,
                        'user' => $user,
                        'oldValues' => [
                            'oldToken' => $token,
                            'oldEmail' => $email,
                            'oldNickname' => $userNickname,
                        ]
                    ];

                    $this->render('user/edit.tpl.php', $viewDatas);
                }

            }

        } else {
            http_response_code(404);
            return $this->render('errors/err404.tpl.php');
        }
    }
}
