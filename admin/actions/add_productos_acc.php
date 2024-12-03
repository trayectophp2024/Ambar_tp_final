<?php


require_once "../../functions/autoload.php";


$postData = $_POST;
$fileData = $_FILES['imagen'];

/*  echo "<pre>"; 
 print_r($postData);
echo "</pre>";  */


try {

    $productos = new Producto();

    $imagen = (new Imagen())->subirImagen(__DIR__ . "/../../img/", $fileData );


    $productos->insert($postData['nombre'],$postData['descripcion'],$postData['precio'],$postData['marca'],$imagen, $postData['id_catalogo']);

    (new Alerta())->add_alerta("success", "El producto se cargó correctamente");
    
    header("Location: ../index.php?sec=admin_productos");
} catch (\Exception $e) {
    die("No se pudo cargar el producto" . $e);
}


?>