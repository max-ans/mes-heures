<?php

namespace App\Controllers;

use App\Models\User;

class UserController extends MainController
{
    public function userShow($nickname)
    {        
        if (isset($_SESSION['connectedUser']) && !empty($_SESSION['connectedUser'])) {
  
            $user = User::findByNickname($nickname);
            
            if ($user) {

                if($user == $_SESSION['connectedUser']) {

                    $viewDatas['user'] = $user;
        
                    return $this->render('user/show.tpl.php', $viewDatas);
                    
                } else {
                    
                    return $this->render('errors/err403.tpl.php');
                }

            } else {
    
                return $this->render('errors/err404.tpl.php');
    
            }
        }

        return $this->redirectTo('login');
    }
}