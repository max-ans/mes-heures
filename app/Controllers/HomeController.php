<?php

namespace App\Controllers;

class HomeController extends MainController
{
    private $router;



    public function __construct($router)
    {
        $this->router = $router;
    }

    public function homepage ()
    {
        $viewDatas = [
            'router' => $this->router
        ];

        $this->render('main/table.tpl.html', $viewDatas);
    }
}