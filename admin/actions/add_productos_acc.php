<?php


require_once "../../classes/Conexion.php";
require_once "../../classes/Producto.php";

$postData = $_POST;

 echo "<pre>"; 
 print_r($postData);
echo "</pre>"; 

class Imagen{

    //agregar imagen
     public function subirImagen($directorio, $datosArchivo){

        if (!empty($datosArchivo['tmp_name'])) {
            //le vamos a dar un nombre a la imagen
            $og_name = (explode(".",$datosArchivo['name']));
            $extension = end($og_name);
            $filename = time() . ".$extension";

            $fileUpload = move_uploaded_file($datosArchivo['tmp_name'], "$directorio/$filename");
            if (!$fileUpload) {
                throw new Exception("No se pudo Cargar la Imagen");
            }else {
                return $filename;
            }
        }
     }
     //borrar imagen

     public function borrarImagen($archivo){
        if (file_exists($archivo)) {
            $fileDelete = unlink($archivo);

            if (!$fileDelete) {
                throw new Exception("No se pudo Borrar la Imagen");
            }else {
                return TRUE;
            }
        } else {
        return false;
     }
}
}

try {
    (new Producto())->insert($postData['nombre'],$postData['descripcion'],$postData['marca'],$postData['precio'],$imagen);

    
    header("Location: ../index.php?sec=admin_productos");
} catch (\Exception $e) {
    die("No se pudo cargar el producto" . $e);
}


?>