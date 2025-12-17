<?php

use App\Categoria;

require_once __DIR__ . '/../vendor/autoload.php';

session_start();

$categorias = Categoria::todas();
    if (!empty($_SESSION['carrito']))
    {
        print_r($_SESSION['carrito']);
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de categorías</title>
</head>
<body>
    <header>
        <h1>Lista de categorías</h1>
    </header>
    <main>
        <ul>
            <?php foreach ($categorias as $categoria): ?>
                <li><a href="productos.php?cat=<?= $categoria['Nombre'] ?>&desc=<?= $categoria['Descripcion'] ?>"><?= $categoria['Nombre'] ?></a></li>
            <?php endforeach; ?>
        </ul>
    </main>
    <footer>
        <p>Usuario:<?php /* $_SESSION('') */ ?> <a href="listaCategorias.php">Home</a> <a href="carrito.php">Ver carrito</a> <a href="logout.php">Cerrar sesión</a></p>
    </footer>
</body>
</html>
