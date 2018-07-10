<?php

namespace App\Controllers;

use AGENDA\Controller\Action;
use AGENDA\DI\Container;
use App\Middlewares\Validator;

class ContatosController extends Action
{
    /**
     * View que lista todos os contatos /contatos
     */
    public function index()
    {
        $this->render('index');
    }

    /**
     * Retorna todos os contatos registrados via json /api/contatos
     */
    public function all()
    {
        $contato = Container::getModel('Contato');

        header('Content-Type: application/json');

        echo json_encode($contato->fetchAll(),JSON_PRETTY_PRINT);

        die();
    }

    /**
     * Cria um novo registro de contato /api/contatossave
     */
    public function save()
    {
        if(!Validator::isEmpty($_POST['nome'])){
            $errors['nome.empty'] = "Campo nome precisa ser preenchido";
        }

        if(!Validator::isMinValue($_POST['nome'],3)){
            $errors['nome.min'] = "Campo nome precisa ter no mínimo 3 caracteres";
        }

        if(!Validator::isEmpty($_POST['email'])){
            $errors['email.empty'] = "Campo e-mail precisa ser preenchido";
        }

        if(!Validator::isMinValue($_POST['email'],7)){
            $errors['email.min'] = "Campo e-mail precisa ter no mínimo 7 caracteres";
        }

        if(!Validator::isEmail($_POST['email'])){
            $errors['email.email'] = "Campo e-mail precisa ser um e-mail válido";
        }

        if(!Validator::isEmpty($_POST['celular'])){
            $errors['celular.empty'] = "Campo celular precisa ser preenchido";
        }

        if(!Validator::isMinValue($_POST['celular'],15)){
            $errors['celular.empty'] = "Campo celular precisa ter no mínimo 15 caracteres";
        }

        if(isset($errors)){
            echo json_encode($errors);
            die();
        }else{
            $contato = Container::getModel('Contato');
            return $contato->save($_POST);
        }
    }

    /**
     * Atualiza um registro de contato /api/contatos/{ID}/update
     */
    public function update()
    {
        if(!Validator::isEmpty($_POST['nome'])){
            $errors['nome.empty'] = "Campo nome precisa ser preenchido";
        }

        if(!Validator::isMinValue($_POST['nome'],3)){
            $errors['nome.min'] = "Campo nome precisa ter no mínimo 3 caracteres";
        }

        if(!Validator::isEmpty($_POST['email'])){
            $errors['email.empty'] = "Campo e-mail precisa ser preenchido";
        }

        if(!Validator::isMinValue($_POST['email'],7)){
            $errors['email.min'] = "Campo e-mail precisa ter no mínimo 7 caracteres";
        }

        if(!Validator::isEmail($_POST['email'])){
            $errors['email.email'] = "Campo e-mail precisa ser um e-mail válido";
        }

        if(!Validator::isEmpty($_POST['celular'])){
            $errors['celular.empty'] = "Campo celular precisa ser preenchido";
        }

        if(!Validator::isMinValue($_POST['celular'],15)){
            $errors['celular.empty'] = "Campo celular precisa ter no mínimo 15 caracteres";
        }

        if(isset($errors)){
            echo json_encode($errors);
            die();
        }else{
            $url = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
            $getId = explode("/",$url);
            $getId = intval($getId[3]);
            $contato = Container::getModel('Contato');
            return $contato->update($_POST,$getId);
        }
    }

    /**
     * Carrega o formulário de edição /contatos/{ID}/edit
     */
    public function edit()
    {
        $contato = Container::getModel('Contato');

        $url = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
        $getId = explode("/",$url);
        $getId = intval($getId[2]);

        $this->view->contatoId = $getId;
        $this->render('edit');
    }

    /**
     * Retorna os dados de um contato para edição /api/contatos/{ID}/edit
     */
    public function editFind()
    {
        $url = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
        $getId = explode("/",$url);
        $getId = intval($getId[3]);

        $contato = Container::getModel('Contato');

        header('Content-Type: application/json');

        echo json_encode($contato->find($getId),JSON_PRETTY_PRINT);

        die();
    }

    /**
     * Deleta um registro de contato /api/contatos/{ID}/delete
     */
    public function delete()
    {
        $url = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
        $getId = explode("/",$url);
        $getId = intval($getId[3]);
        $contato = Container::getModel('Contato');
        return $contato->delete($getId);
    }

    /**
     * Carrega o formulário de criação de registro
     */
    public function create()
    {
        $this->render('create');
    }
}