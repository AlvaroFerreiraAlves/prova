<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 31/10/18
 * Time: 00:53
 */

class Connection
{
    private static $instance = null;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    public static function conectDB()
    {


        if (!isset(self::$instance)) {
            try {
                self::$instance = new PDO("mysql:host=localhost;dbname=prova", "root", "password");
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Erro: " . $e->getMessage();
            }
        }

        return self::$instance;

    }
}