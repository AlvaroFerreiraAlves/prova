<?php
/**
 * Created by PhpStorm.
 * User: ALVARO
 * Date: 31/10/2018
 * Time: 11:54
 */
include('../Conexao/Connection.php');


abstract class Crud
{
    protected $table;
    abstract public function create();

    public function all()
    {
        $db = Connection::conectDB();
        $sql  = "SELECT * FROM $this->table";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}