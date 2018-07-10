<?php

namespace App\Controllers;

use AGENDA\Controller\Action;
use AGENDA\DI\Container;

class IndexController extends Action
{
    /**
     * Tela inicial do sistema
     */
    public function index()
    {
        $this->render('index');
    }
}