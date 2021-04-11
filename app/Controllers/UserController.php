<?php

namespace App\Controllers;

use App\Models\User;
use App\Utils\Authentication;

class UserController extends MainController
{
    public function userShow($nickname)
    {        
        $user = User::findByNickname($nickname);
      
        if ($user) {

            $authenticator = new Authentication($this->router);
    
            if ($authenticator->checkAuthentication($user)) {
                $viewDatas['user'] = $user;
        
                return $this->render('user/show.tpl.php', $viewDatas);
    
            }
        } else {

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

            return $this->render('errors/err404.tpl.php');
        }
        
 
    }

    public function sendEditForm() {
        dump($_POST);
        dump($_SESSION);
    }
}