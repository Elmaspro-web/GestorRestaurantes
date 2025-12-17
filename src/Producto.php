<?php

namespace App;

use PDO;
use Tools\Conexion;

class Producto {

    public static function productosDeCategoria(int $codCat): array
    {
        $pdo = Conexion::getConexion();

        $sql = "SELECT * FROM productos WHERE 'Categoria' = :codCat";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':codCat', $codCat, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function buscarPorId(int $codProd)
    {
        $pdo = Conexion::getConexion();

        $sql = "SELECT * FROM productos WHERE CodProd = :codProd";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':codProd', $codProd, PDO::PARAM_INT);
        $stmt->execute();


        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

};