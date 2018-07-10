<?php

namespace App\Middlewares;


class Auth
{
    /**
     * Não permite acessar uma rota protegida por sessão.
     */
    public function __construct($request)
    {
        if(!isset($_SESSION['user']))
        {
            header('Location: http://localhost:8000/login');
        }
    }

    /**
     * Verifica se está logado
     */
    public static function logado()
    {
        return isset($_SESSION['user']) ? true : false;
    }
}