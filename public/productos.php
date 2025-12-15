<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Producto;

$arrayPorCategoria = Producto::productosDeCategoria((int) ($_GET['cat']))

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    <main>
        <h1>Productos de la categoria: <?= $_GET['cat'] ?></h1>
        <ul>
            <?php foreach ($arrayPorCategoria as $producto): ?>
                <li><?= $producto['Nombre'] ?> (<?= $producto['Descripcion'] ?>)</li>
            <?php endforeach ?>
        </ul>
    </main>
</body>
</html>
