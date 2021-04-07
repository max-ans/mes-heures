<?php

namespace App\Controllers;

class MainController
{

    protected $router;

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

        require_once __DIR__ . '/../templates/partials/_header.tpl.php';
        require_once __DIR__ . '/../templates/' . $viewName;
        require_once __DIR__ . '/../templates/partials/_footer.tpl.php';

    }

    public function getTokenCsrf () {
        $bytes = random_bytes(10);
        $token = bin2hex($bytes);

        $_SESSION['csrfToken'] = $token;

        return $token;
    }

    public function redirectTo ($routeName, $params = null)
    {
        if ($params){
            return header('Location:'. $this->router->generate($routeName, ['nickname' => $params]));
        }
        return header('Location:'. $this->router->generate($routeName));
    }
}