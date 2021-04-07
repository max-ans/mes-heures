<?php

namespace App\Controllers;

use App\Models\User;

class RegistrationController extends MainController
{

    public function showRegistrationForm () {

        $viewDatas = [
            'token' => $this->getTokenCsrf(),
        ];

        $this->render('registration/registration.tpl.php', $viewDatas);
    }

    public function sendRegistrationForm () {
       
        $oldEmail = $_POST['email'];
        $email = trim(filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL));
        $password = filter_input(INPUT_POST, 'password');
        $repeatedPassword = filter_input(INPUT_POST, 'repeated__password');
        $token = filter_input(INPUT_POST, 'token');
        $check = filter_input(INPUT_POST, 'check', FILTER_SANITIZE_STRING);
        

        $errorsList = [];
        $passwordValidation = '#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#';
        $alreadyExist = User::findByEmail($email);

        if ($alreadyExist) {
            $errorsList[] = "Un compte existe déjà avec cette adresse, veuillez vous connecter";
        }

        if(empty($token) || $token != $_SESSION['csrfToken']){
            $errorsList[] = "Erreur CSRF !";
        }

        if ($alreadyExist) {
            $errorsList[] = "Un compte existe déjà avec cette adresse, veuillez vous connectez";
        }

        if ($email === ""){
            $errorsList[] = "L'adresse email est invalide";
        }

        if (empty($password)) {
            $errorsList[] = 'Le mot de passe est vide';
        }

        if (!preg_match($passwordValidation, $password)) {
            $errorsList[] = 'Le mot de passe ne respecte pas les règles de sécurité';
        }

        if ($password !== $repeatedPassword) {
            $errorsList[] = 'Les deux champs de mot de passe doivent correspondre';
        }

        if ($check === null) {
            $errorsList[] = 'Vous devez accepter les CGU';
        }

        if (empty($errorsList)) {
            $user = new User;

            $user->setEmail($email);
            $user->setPassword(password_hash($password, PASSWORD_DEFAULT));

            $result = $user->insertNew();

            if($result) {
                unset($_SESSION['csrfToken']);
                $_SESSION['registerMessage'] = 'Votre compte a bien été créé. Vous pouvez désormais vous connecter';

                $this->redirectTo("login");
            } else {
                $errorsList[] = "Une erreur a eu lieu lors de l'ajout";
            }
        } else {
            
            $viewDatas = [
                'errorsList' => $errorsList,
                'oldValues'   => [
                    'oldToken' => $token,
                    'oldEmail' => $oldEmail,
                ]
            ];

            $this->render('registration/registration.tpl.php', $viewDatas);
        }
    }
    
}