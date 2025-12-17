<?php

session_start();

require_once __DIR__ . '/../vendor/autoload.php';

use App\Producto;

$arrayPorCategoria = Producto::productosDeCategoria((int) ($_GET['cat']));

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $cod = $_GET['cod'];
    $cantidad = (int) $_POST['cantidad'];

    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = [];
    }

    if (isset($_SESSION['carrito'][$cod])) {
        $_SESSION['carrito'][$cod] += $cantidad;
    } else {
        $_SESSION['carrito'][$cod] = $cantidad;
    }
}

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

        <h1><?= $_GET['cat'] ?></h1>

        <p><?= $_GET['desc'] ?></p>

        <table>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Peso</th>
                <th>Stock</th>
                <th>Comprar</th>
            </tr>
            <?php foreach ($arrayPorCategoria as $producto): ?>
                <tr>
                    <td><?= $producto['Nombre'] ?></td>
                    <td><?= $producto['Descripcion'] ?></td>
                    <td><?= $producto['Peso'] ?></td>
                    <td><?= $producto['Stock'] ?></td>
                    <td>
                        <form action="productos.php?cod=<?= $producto['CodProd'] ?>" method="post">
                            <input type="number" name="cantidad" min="1" max="<?= $producto['Stock'] ?>">
                            <button type="submit">Comprar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </main>
    <footer>
        <p>Usuario:<?php /* $_SESSION('') */ ?> <a href="listaCategorias.php">Home</a> <a href="#">Ver carrito</a> <a href="logout.php">Cerrar sesión</a></p>
    </footer>
</body>
</html>
