<?php

namespace App\Controllers;

class HomeController extends MainController
{

    public function homepage ()
    {

        unset($_SESSION['tableSuccess']);

        $viewDatas = [
            'token' => $this->getTokenCsrf(),
        ];

        if (isset($_SESSION['connectedUser']) && !empty($_SESSION['connectedUser'])) {
            $viewDatas['user'] = $_SESSION['connectedUser'];
        }

        return $this->render('main/table.tpl.php', $viewDatas);
    }
}