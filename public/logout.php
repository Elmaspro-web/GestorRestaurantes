<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Usuario;

Usuario::logout();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Cerrado de sesión</title>
</head>
<body>
        <header>
            <h1>Cerrado de sesión</h1>
        </header>
        <main>
            <p>Se ha cerrado la sesión correctamente</p>
        </main>
        <footer>
            <a href="index.php">Volver al login</a>
        </footer>
</body>
</html>
