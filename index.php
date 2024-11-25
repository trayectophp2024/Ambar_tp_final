<?php
require('partials/header.php');

$secciones_validas = [
    "home" => [
        "titulo" => "Bienvenidos"
    ],
    "envios" => [
        "titulo" => "Politica de envios"
    ],
    "nosotras" => [
        "titulo" => "¿Quienes somos?"
    ],
    "categorias" => [
        "titulo" => "categoria de producto"
    ],
    "producto" => [
        "titulo" => "Detalle de producto"
    ],
    "todos" => [
        "titulo" => "todos los productos"
    ],
    "contacto" => [
        "titulo" => "Contacto"
    ],
    "creador" => [
        "titulo" => "creador"
    ]
];


$seccion = $_GET['sec'] ?? "home";

if (!array_key_exists($seccion, $secciones_validas)) {
    $vista = "404";
    $titulo = "404 - Página no encontrada";
} else {
    $vista = $seccion;
    $titulo = $secciones_validas[$seccion]['titulo'];
}
?>




<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KikiYLalaShop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="img/kklltransp.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <main class="container">
        <?php
        require file_exists("views/$vista.php") ? "views/$vista.php" : "views/404.php"
        ?>

    </main>
</body>
<?php
require('partials/footer.php');
?>
</html>