<?php

namespace App\Utils;

use App\Models\User;
use App\Controllers\MainController;

class Authentication extends MainController
{
    public function checkAuthentication (User $user) 
    {
        if (isset($_SESSION['connectedUser']) && !empty($_SESSION['connectedUser'])) {

            if($user == $_SESSION['connectedUser']) {

                return true;
                
            } else {
                http_response_code(403);
                return $this->render('errors/err403.tpl.php');
                
            }  
            
        }
        http_response_code(302);
        return $this->redirectTo('login');
        
    }
}  

