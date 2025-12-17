<?php

session_start();

require_once __DIR__ . '/../vendor/autoload.php';

use App\Producto;

    $productosCarrito = [];
    foreach ($_SESSION['carrito'] as $productoKey => $cantidadValue) {
        $producto = Producto::buscarPorId($productoKey);
        $productosCarrito[$productoKey] = [
            'producto' => $producto['Nombre'],
            'cantidad' => $cantidadValue
        ];

    }

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carrito de la compra</title>
</head>
<body>
    <header>
        <h1>Carrito de la compra</h1>
    </header>
    <main>
        <table>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
            </tr>
            <?php foreach ($productosCarrito as $producto): ?>
                <tr>
                    <td><?php echo $producto['producto'] ?></td>
                    <td><?php echo $producto['cantidad'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </main>
    <footer>
        <p>Usuario:<?php /* $_SESSION('') */ ?> <a href="listaCategorias.php">Home</a> <a href="#">Ver carrito</a> <a href="logout.php">Cerrar sesión</a></p>
    </footer>
</body>
</html>
