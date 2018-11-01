<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 31/10/18
 * Time: 01:28
 */
require_once('../Model/Product.php');

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

        $errorMSG = "";

        if (empty($_POST["name"])) {
            $errorMSG = "<li>Nome é obrigatório</li>";
        }

        if (empty($_POST["description"])) {
            $errorMSG .= "<li>Descrição é obrigatório</li>";
        }

        echo json_encode([$errorMSG]);

        if (empty($errorMSG)){
            $product = new Product();
            $product->setName($_POST['name']);
            $product->setDescription($_POST['description']);
            $product->setPrice($_POST['price']);
            $product->setCategory($_POST['categories']);
            $product->create();

        }

    }

}