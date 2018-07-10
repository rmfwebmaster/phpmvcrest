<?php

namespace App;


class Conn
{

    /**
     * Conexão com o banco de dados
     */
    public static function getDb()
    {
        return new \PDO("mysql:host=127.0.0.1;dbname=agendamvc","root","mysql",array(
            \PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8',
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
        ));
    }
} //