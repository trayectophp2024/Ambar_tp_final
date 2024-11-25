<?php

require_once 'functions/autoload.php';

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

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="pcolor container-fluid">

        <a class="navbar-brand pcolore" href="index.php?sec=home">
            Kiki&LalaShop.
        </a>
        <a href="index.php?sec=todos" class="icono">
            <i class="fa-solid"> <img width="50px" src="img/kklltransp.png" alt=""></i>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="pcolores nav-link" aria-current="page" href="index.php?sec=home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="pcolores nav-link" href="index.php?sec=categorias&categoria=makeup">Makeup</a>
                </li>
                <li class="nav-item">
                    <a class="pcolores nav-link" href="index.php?sec=categorias&categoria=skincare">Skincare</a>
                </li>
                <li class="nav-item">
                    <a class="pcolores nav-link" href="index.php?sec=categorias&categoria=accesorios">Accesorios</a>
                </li>
                <li class="nav-item">
                    <a class="pcolores nav-link" href="index.php?sec=nosotras">Nosotras</a>
                </li>
                <li class="nav-item">
                    <a class="pcolores nav-link" href="index.php?sec=envios">Envios</a>
                </li>
                <li class="nav-item">
                    <a class="pcolores nav-link" href="index.php?sec=contacto">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="pcolores nav-link" href="index.php?sec=creador">Creador</a>
                </li>
                </li>
            </ul>
        </div>
    </div>
</nav>

<body>

    <main class="container">
        <?php
        require file_exists("views/$vista.php") ? "views/$vista.php" : "views/404.php"
        ?>

    </main>


    <footer style="background-color:#FDB0C0;">
        <p class="text-light text-center p-4">Todos los derechos reservados - 2024 - Kiki&LalaShop</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>