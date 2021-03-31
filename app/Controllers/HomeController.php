<?php

namespace App\Controllers;

class HomeController extends MainController
{

    public function homepage ()
    {
        $this->render('main/table.tpl.html');
    }
}