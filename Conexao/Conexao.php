<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 31/10/18
 * Time: 00:53
 */

abstract class Conexao
{

    protected function conectDB(){

        try {

            $conexao = new PDO("mysql:host=localhost; dbname=prova", "root", "password");
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexao->exec("set names utf8");

        } catch (PDOException $erro) {
            echo "Erro na conexão:" . $erro->getMessage();
        }
    }
}