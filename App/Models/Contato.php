<?php


namespace App\Models;


use AGENDA\Model\Table;

class Contato extends Table
{
    protected $table = "contatos";

    /**
     * Método que consulta a quantidade total de registros
     */
    public function countAll()
    {
        $query = "Select count(*) AS TOTAL from $this->table";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    /**
     * Método que consulta a quantidade total de registros por sexo e estado civil
     */
    public function countTipo($label,$campo,$tipo)
    {
        $query = "Select count(*) AS {$label} from $this->table where $campo = '$tipo'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    /**
     * Método que consulta a quantidade total de registros cadastrados na data atual
     */
    public function countToday($today_ini,$today_fim)
    {
        $query = "Select count(*) AS TOTAL_TODAY from $this->table where created_at BETWEEN {$today_ini} AND {$today_fim}";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}