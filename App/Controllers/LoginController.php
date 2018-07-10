<?php

namespace App\Controllers;
use AGENDA\Controller\Action;
use AGENDA\DI\Container;
use App\Middlewares\Validator;

class LoginController extends Action
{
    /**
     * Se tiver logado redireciona para o dashboard, senão, para tela de login
     */
    public function index()
    {
        $_SESSION['user'] ? header("location:http://localhost:8000/admin") : $this->render('index');
    }


    /**
     * Executa o Processo do Login
     */
    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!Validator::isEmpty($_POST['email']))
        {
            $errors['email.empty'] = "Campo e-mail precisa ser preenchido";
        }

        if(!Validator::isMinValue($_POST['email'],7))
        {
            $errors['email.min'] = "Campo e-mail precisa ter no mínimo 7 caracteres";
        }

        if(!Validator::isEmail($_POST['email']))
        {
            $errors['email.email'] = "Campo e-mail precisa ser um e-mail válido";
        }

        if(!Validator::isEmpty($_POST['password']))
        {
            $errors['password.empty'] = "Campo e-mail senha ser preenchido";
        }

        if(!Validator::isMinValue($_POST['password'],5))
        {
            $errors['password.min'] = "Campo senha precisa ter no mínimo 7 caracteres";
        }

        $user = Container::getModel('User');
        $dados = $user->login($email);

        if(count($dados)==1)
        {
            $errors['email.wrong'] = "Dados de acesso não conferem";
        }

        if (!password_verify( $_POST['password'], $dados['password'] ) )
        {
            $errors['password.wrong'] = "Senha não confere";
        }

        if(isset($errors))
        {
            echo json_encode($errors);
            die();
        }
        else
        {
            session_start();
            $_SESSION['user'] = $dados['name'];

            echo "1";
            die();
        }
    }

    /**
     * Faz o logout no sistema
     */
    public function logout()
    {
        session_start();
        session_destroy();
        header("location:http://localhost:8000/login");
    }
}