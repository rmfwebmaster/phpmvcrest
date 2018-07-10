<?php

namespace AGENDA\DI;

use App\Conn;

class Container
{
    /**
     * Injeção de dependência para as models
     */
    public static function getModel($model)
    {
        $class = "\\App\\Models\\".ucfirst($model);
        return new $class(Conn::getDb());
    }
}