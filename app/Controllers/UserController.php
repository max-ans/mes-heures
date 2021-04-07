<?php

namespace App\Controllers;

use App\Models\User;

class UserController extends MainController
{
    public function userShow($nickname)
    {
        $user = User::findByNickname($nickname);

        if ($user) {

            $viewDatas['user'] = $user;

            $this->render('user/show.tpl.php', $viewDatas);

        } else {

            $this->render('error/err404.tpl.php');

        }
    }
}