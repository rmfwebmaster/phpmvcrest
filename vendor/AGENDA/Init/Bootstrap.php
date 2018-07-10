<?php

namespace AGENDA\Init;


use AGENDA\Controller\Action;

abstract class Bootstrap extends Action
{
    private $routes;

    public function __construct()
    {
        session_start();
        $this->initRoutes();
        $this->run($this->getUrl());
    }

    /**
     * Inicia as Rotas setadas no arquivo Route.php
     */
    abstract protected function initRoutes();

    /**
     * Executa as Rotas
     */
    protected function run($url)
    {
        array_walk($this->routes, function ($route) use ($url){
            if($url == $route['route'])
            {
                $verbo = $route['verbo'];

                if(isset($route['middlewares']))
                {
                    $middleware = $route['middlewares'];
                }

                $metodo = $_SERVER['REQUEST_METHOD'];

                if($metodo != $verbo){
                   return Action::render('405');
                }

                if(isset($middleware)){
                    $classMiddleware = "App\\Middlewares\\".ucfirst($route['middlewares']);
                    $middleware = new $classMiddleware($_POST);
                }

                $class = "App\\Controllers\\".ucfirst($route['controller']);
                $controller = new $class;
                $action = $route['action'];
                $controller->$action();
            }
        });

        $this->render('404');
    }

    /**
     * Seta o array de rotas vindo do arquivo Routes.php
     */
    protected function setRoutes(array $routes)
    {
        $this->routes = $routes;
    }

    /**
     * Captura a URL atual
     */
    protected function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
    }
}