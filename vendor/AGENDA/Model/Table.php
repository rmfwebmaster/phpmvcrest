<?php

namespace AGENDA\Model;


abstract class Table
{
    protected $db;
    protected $table;

    /**
     * Conexão com o Banco
     */
    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    /**
     * Retorna todos os registros de uma tabela
     */
    public function fetchAll()
    {
        $query = "Select *  from $this->table";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * Registra uma linha na tabela
     */
    public function save($data)
    {
        $params_values = ':'.implode(',:', array_keys($data));

        $query  = "INSERT INTO {$this->table} VALUES (NULL,$params_values,Now(),NULL)";
        $stmt   = $this->db->prepare($query);

        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key",$value);
        }
        try{
            echo $stmt->execute();
            die();
        }catch (PDOException $e) {
            trigger_error("<b>Erro ao Cadastrar:<b>{$e->getMessage()}", $e->getCode());
        }
    }

    /**
     * Atualiza um registro na tabela por ID
     */
    public function update($data, $id)
    {
        $params_values = ':'.implode(',:', array_keys($data));

        $fildsValues = "";

        foreach ($data as $key => $value) {
            $fildsValues .= $key."='".$value."',";
        }

        $query = "UPDATE {$this->table} SET $fildsValues updated_at=Now() WHERE id=$id";

        $stmt = $this->db->prepare($query);

        try{
            echo $stmt->execute();
            die();
        }catch (PDOException $e) {
            trigger_error("<b>Erro ao Editar:<b>{$e->getMessage()}", $e->getCode());
        }
    }

    /**
     * Consultar um único registro por ID
     */
    public function find($id)
    {
        $query = "Select *  from $this->table WHERE id=:id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":id",$id);
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    /**
     * Exclui uma linha da tabela por ID
     */
    public function delete($id)
    {
        $query = "Delete from $this->table WHERE id=:id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":id",$id);
        try
        {
            echo $stmt->execute();
            die();
        }
        catch (PDOException $e)
        {
            trigger_error("<b>Erro ao Deletar:<b>{$e->getMessage()}", $e->getCode());
        }
    }
}