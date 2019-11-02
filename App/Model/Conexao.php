<?php
namespace App\Model;
//Conexão
//https://auth-db177.hostinger.com/db_structure.php?server=1&db=u323928735_avd

class Conexao {
    private static $instance;

    public static function getConn() {
        if(!isset(self::$instance)):
            self::$instance = new \PDO('mysql:host=localhost;dbname=u323928735_consumix;charset=utf8', 'u323928735_cons', 'ROGImari1518');
        endif;

        return self::$instance;
    }
}