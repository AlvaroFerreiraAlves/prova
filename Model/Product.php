<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 31/10/18
 * Time: 00:18
 */

require_once('Crud.php');
require_once('Category.php');

class product extends Crud
{
    protected $table = 'products';
    private $name;
    private $description;
    private $price;
    private $category;


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

    public function setCategory($category)
    {
        $this->category = $category;
    }


    public function create()
    {
        $db = Connection::conectDB();
        $sql  = "INSERT INTO $this->table (name, description, price, categories_id) VALUES (:name, :description, :price, :categories_id)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':price', $this->price);
        $stmt->bindParam(':categories_id', $this->category);
        return $stmt->execute();
    }


}