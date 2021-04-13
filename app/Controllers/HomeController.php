<?php

namespace App\Controllers;

class HomeController extends MainController
{

    public function homepage ()
    {

        $viewDatas = [];

        if (isset($_SESSION['connectedUser']) && !empty($_SESSION['connectedUser'])) {
            $viewDatas['user'] = $_SESSION['connectedUser'];
        }

        return $this->render('main/table.tpl.php', $viewDatas);
    }
}