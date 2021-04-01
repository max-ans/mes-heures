<?php

namespace App\Controllers;

class RegistrationController extends MainController
{

    public function showRegistrationForm () {
        $this->render('registration/registration.tpl.php');
    }

    public function sendRegistrationForm () {
        dump($_POST);
    }
    
}