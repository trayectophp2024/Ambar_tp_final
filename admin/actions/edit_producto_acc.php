<?php

require_once "../../functions/autoload.php";


$postData = $_POST;

$id = $_GET['id'] ?? FALSE;

$fileData = $_FILES['imagen'] ?? FALSE;


try {


    $producto = new Producto();

    if(!empty($fileData['tmp_name'])){
        if (!empty($postData['imagen_og'])) {
            (new Imagen())->borrarImagen(__DIR__."img/". $postData['imagen_og']);
        }

        $imagen = (new Imagen())->subirImagen(__DIR__."img/", $fileData);

        $producto->remplazar_imagen($imagen, $id);

    }

   

    $producto->edit($postData['nombre'],$postData['descripcion'],$postData['precio'],$postData['marca'],$postData['id_catalogo'], $id);

    header("location: ../index.php?sec=admin_productos");
} catch (\Exception $e) {
    die("no se puede cargar el producto". $e);
}

?>