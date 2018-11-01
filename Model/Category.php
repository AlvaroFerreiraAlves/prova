<?php
/**
 * Created by PhpStorm.
 * User: ALVARO
 * Date: 01/11/2018
 * Time: 17:10
 */
require_once('Connection.php');
class Category
{
    protected $table = 'categories';
    private $name;



    public function getTable()
    {
        return $this->table;
    }

    public function setTable($table)
    {
        $this->table = $table;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
    }



    public function all()
    {
        $db = Connection::conectDB();
        $sql  = "SELECT * FROM $this->table";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }


}