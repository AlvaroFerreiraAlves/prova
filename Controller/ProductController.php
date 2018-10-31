<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 31/10/18
 * Time: 01:28
 */
include('../Model/Product.php');

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['method'])) {
    $method = $_POST['method'];
    if(method_exists('ProductController', $method)) {
        $product = new ProductController();
        $product->$method($_POST);
    } else {
        echo 'Metodo incorreto';
    }
}

class ProductController
{
    public function store()
    {
        $product = new Product();
        $product->setName($_POST['name']);
        $product->setDescription($_POST['description']);
        $product->setPrice($_POST['price']);
        $product->create();
    }

}