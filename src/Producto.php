<?php

namespace App;

use PDO;
use Tools\Conexion;

class Producto {

    public static function productosDeCategoria(int $codCat): array
    {
        $pdo = Conexion::getConexion();

        $sql = "SELECT * FROM productos WHERE $codCat = $codCat";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

//    public static function buscarPorId(int $codProd): ?Producto
//    {
//
//    }
};