<?php

  $id = $_GET['id'] ?? FALSE;

  $proucto = (new Producto())->producto_x_id($id);


?>

<div class="row my-5 g-3">
    <h1>¿Está seguro que desea eliminar el producto : <?=$proucto->getNombre() ?> ?</h1>
    <button style="background-color:#f1666d" class="btn" ><a href="actions/delete_producto_acc.php?id=<?=$proucto->getId() ?>" class="text-decoration-none text-black">si, eliminar</a></button>
</div>