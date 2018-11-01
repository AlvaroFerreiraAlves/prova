<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 31/10/18
 * Time: 00:18
 */

include('../Model/Crud.php');

class product extends Crud
{
    protected $table = 'products';
    private $name;
    private $description;
    private $price;


    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
    }


    public function getDescription()
    {
        return $this->description;
    }


    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }


    public function create()
    {
        $db = Connection::conectDB();
        $sql  = "INSERT INTO $this->table (name, description, price) VALUES (:name, :description, :price)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':price', $this->price);
        return $stmt->execute();
    }


}