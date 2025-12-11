<?php

namespace Tools;

require_once './../vendor/autoload.php';

use PDO;
use PDOException;

class Conexion
{
    static function getConexion(): PDO
    {

        $host = "localhost";
        $bd = "restauranteBBDD";
        $port = "3306";
        $charset = "utf8mb4";
        $user = "nacho";
        $pass = "1234";

        try {
            $pdo = new PDO("mysql:host=$host;dbname=$bd;port=$port;charset=$charset", "$user", "$pass");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            throw new PDOException("Error de conexión: " . $e->getMessage());
        }

    }
}