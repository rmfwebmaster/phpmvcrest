<?php

namespace App\Models;

use AGENDA\Model\Table;

class User extends Table
{
    protected $table = "users";

    /**
     * Método que consulta os dados para login
     */
    public function login($email)
    {
        $query = "Select name,password from $this->table where email=:email";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":email",$email);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}

