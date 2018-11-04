<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 01/11/18
 * Time: 23:20
 */
require_once('../Model/Budget.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['method'])) {
    $method = $_POST['method'];
    if (method_exists('BudgetController', $method)) {
        $product = new BudgetController();
        $product->$method($_POST);
    } else {
        echo 'Metodo incorreto';
    }
}

class BudgetController
{
    public function store()
    {

        $budget = new Budget();

        $budget->budgetProduct($_POST['items'], 4);


    }
}