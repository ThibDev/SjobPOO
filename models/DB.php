<?php 
namespace App\models;
use \PDO;

class DB{
    private static $host="localhost";
    private static $dbname="Sjob";
    private static $port="3306";
    private static $charset="UTF8";

    public static function getDbh(){
        $dsn ="mysql:host=".self::$host.";dbname=".self::$dbname.";port=".self::$port.";charset=".self::$charset;
        return new PDO($dsn, "root", "");
    }
}

?>
