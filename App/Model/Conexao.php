<?php
namespace App\Model;
//Conexão
//https://auth-db177.hostinger.com/db_structure.php?server=1&db=u323928735_avd

class Conexao {
    private static $instance;

    public static function getConn() {
        if(!isset(self::$instance)):
            self::$instance = new \PDO('mysql:host=mysql873.umbler.com;dbname=igorjsoares;charset=utf8', 'consumix', 'ROGImari1518');
        endif;

        return self::$instance;
    }
}