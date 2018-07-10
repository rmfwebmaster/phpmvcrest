<?php

namespace App\Middlewares;


class Validator
{
    /**
     * Valida se algum campo passado no formulário está em branco
     */
    public function isEmpty($field){
        return isset($field);
    }

    /**
     * Valida se algum campo passado no formulário tem a quantidade de caracteres mínima
     */
    public function isMinValue($field,$min){
        if(strlen($field)>=$min){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Valida se o campo de email foi preenchido com um e-mail válido
     */
    public function isEmail($field){
        if(filter_var($field, FILTER_VALIDATE_EMAIL)){
            return true;
        }else {
            return false;
        }
    }
}