<?php

namespace App\Controllers;

class TableController extends MainController
{

    public function tableShow ($id)
    {
        // this method find one table by his id,
        // and send it at view
    }

    public function tablePost ()
    {
        // this method receive informations of table,
        // and make it a model to register
        dump($_SESSION);
        dd($_POST);
    }
}