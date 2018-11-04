<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 01/11/18
 * Time: 23:02
 */

require_once('Connection.php');

class Budget
{
    private $table = 'budgets';
    private $client;


    public function getClient()
    {
        return $this->client;
    }

    public function setClient($client)
    {
        $this->client = $client;
    }


    public function create()
    {
        $db = Connection::conectDB();
        $sql = "INSERT INTO $this->table (client) VALUES (:client)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':client', $this->client);

        return $stmt->execute();
    }

    public function budgetProduct($product_id, $budgets_id)
    {


        $db = Connection::conectDB();
        $sql = "INSERT INTO products_budgets (products_id, budgets_id) VALUES (:products_id, :budgets_id)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':products_id', $product_id);
        $stmt->bindParam(':budgets_id', $budgets_id);

        return $stmt->execute();


    }

}