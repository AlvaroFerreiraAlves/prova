<?php
/**
 * Created by PhpStorm.
 * User: ALVARO
 * Date: 31/10/2018
 * Time: 11:54
 */
require_once('Connection.php');

abstract class Crud
{
    protected $table;
    abstract public function create();

    public function all()
    {
        $db = Connection::conectDB();
        $sql  = "select p.name, p.description, p.price , c.name as categoria from products p join categories c on c.id = p.categories_id;";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}