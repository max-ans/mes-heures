<?php

namespace App\Controllers;

class HomeController extends MainController
{

    public function homepage ()
    {
        return $this->render('main/table.tpl.php');
    }
}