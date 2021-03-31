<?php

namespace App\Controllers;

class MainController
{

    private $router;

    public function __construct($router)
    {
        $this->router = $router;
    }

    public function render ($viewName, $viewDatas=[])
    {
        $viewDatas['vue'] = $viewName;
        $viewDatas['router'] = $this->router;
        $viewDatas['assetsBaseUri'] = $_SERVER['BASE_URI'] . 'assets/';

        extract($viewDatas);

        require_once __DIR__ . '/../templates/partials/_header.tpl.html';
        require_once __DIR__ . '/../templates/' . $viewName;
        require_once __DIR__ . '/../templates/partials/_footer.tpl.html';

    }
}