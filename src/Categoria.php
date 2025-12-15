<?php

namespace App;

use PDO;
use Tools\Conexion;

class Categoria {
    public static function todas(): array
    {
        $pdo = Conexion::getConexion();

        $sql = "SELECT * FROM categorias";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }
//    public static function buscarPorId(int $codCat): ?Categoria
//    {
//
//    }
};