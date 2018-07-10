<?php

namespace App;

use AGENDA\Init\Bootstrap;

class Route extends Bootstrap
{

    /**
     * Método que inicia as rotas estendido de Bootstrap
     */
    protected function initRoutes()
    {
        $url = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

        $routes['home'] = array('route' => '/', 'controller' => 'IndexController', 'action' => 'index', 'verbo' => 'GET');

        $routes['login'] = array('route' => '/login', 'controller' => 'LoginController', 'action' => 'index', 'verbo' => 'GET');
        $routes['dologout'] = array('route' => '/logout', 'controller' => 'LoginController', 'action' => 'logout', 'verbo' => 'GET', 'middlewares' => 'Auth');
        $routes['dologin'] = array('route' => '/dologin', 'controller' => 'LoginController', 'action' => 'login', 'verbo' => 'POST');
        $routes['admin'] = array('route' => '/admin', 'controller' => 'AdminController', 'action' => 'index', 'verbo' => 'GET', 'middlewares' => 'Auth');

        $routes['contatos'] = array('route' => '/contatos', 'controller' => 'ContatosController', 'action' => 'index', 'verbo' => 'GET');
        $routes['contatoscreate'] = array('route' => '/contatos/create', 'controller' => 'ContatosController', 'action' => 'create', 'verbo' => 'GET');
        $getId = explode("/", $url);
        $getId = intval($getId[2]);
        $routes['editcontatos'] = array('route' => "/contatos/$getId/edit", 'controller' => 'ContatosController', 'action' => 'edit', 'verbo' => 'GET');

        $routes['allcontatos'] = array('route' => '/api/contatos', 'controller' => 'ContatosController', 'action' => 'all', 'verbo' => 'GET');
        $routes['savecontatos'] = array('route' => '/api/contatossave', 'controller' => 'ContatosController', 'action' => 'save', 'verbo' => 'POST');
        $getId = explode("/", $url);
        $getId = intval($getId[3]);
        $routes['findcontatos'] = array('route' => "/api/contatos/$getId/edit", 'controller' => 'ContatosController', 'action' => 'editFind', 'verbo' => 'GET');
        $routes['updatecontatos'] = array('route' => "/api/contatos/$getId/update", 'controller' => 'ContatosController', 'action' => 'update', 'verbo' => 'POST');
        $routes['deletecontatos'] = array('route' => "/api/contatos/$getId/delete", 'controller' => 'ContatosController', 'action' => 'delete', 'verbo' => 'GET');

        $this->setRoutes($routes);
    }

}