<?php

namespace App\Controllers;

class MainController
{
    public function render ($viewName, $viewDatas=[])
    {
        $viewDatas['vue'] = $viewName;

        extract($viewDatas);

        require_once __DIR__ . '/../templates/partials/_header.tpl.html';
        require_once __DIR__ . '/../templates/' . $viewName;
        require_once __DIR__ . '/../templates/partials/_footer.tpl.html';

    }
}