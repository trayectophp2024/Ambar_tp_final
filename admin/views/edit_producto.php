<?php

$id = $_GET['id'] ?? FALSE;

$catalogos = (new Catalogo())->catalogo_completo();

$producto = (new Producto())->producto_x_id($id);

?>



<div class="row -my-5">
    <div class="col">
        <h1 class="text-center mb-5">Editar Producto</h1>

        <div class="row mb-5 d-flex align-items-center">
            <form class="row g-3" action="actions/edit_producto_acc.php?id=<?= $producto->getId() ?>" method="POST" enctype="multipart/form-data">

            <div class="col-6 mb-3">
                <label class="form-label" for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $producto->getNombre() ?>" required>

            </div>

            <div class="col-6 mb-3">
                <label class="form-label" for="descripcion">Descripcion:</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?= $producto->getDescripcion() ?>" required>

            </div>

            <div class="col-6 mb-3">
                <label class="form-label" for="precio">Precio:</label>
                <input type="number" class="form-control" name="precio" id="precio" max="9999" value="<?= $producto->getPrecio() ?>" required>
                <div class="form-text"> Ingresa el precio del producto</div>

            </div>

            <div class="col-12 mb-3">
                <label class="form-label" for="marca">Marca:</label>
                <input type="text" class="form-control" name="marca" id="marca" value="<?= $producto->getMarca() ?>" required>
                <div class="form-text"> En caso de que sean multiples marcas, separar los nombres con comas</div>
            </div>

            <div class="col-2 mb-3">
                <label class="form-label" for="imagen">Imagen actual:</label>
                <img width="150px" src="../img/<?=$producto->getImagen() ?>" alt="" class="img-fluid">
                <input type="hidden" class="form-control" name="imagen_og" id="imagen_og" value="<?= $producto->getImagen() ?>">

            </div>

            <div class="col-4 mb-3">
                <label class="form-label" for="imagen">Reemplazar imagen:</label>
                <input type="file" class="form-control" name="imagen" id="imagen">

            </div>

          

          

            <div class="col-md-6 mb-3">
                    <label for="id_catalogo" class="form-label">Catalogo</label>
                    <select style="background-color:#f1d7ff" class="form-select" name="id_catalogo" id="id_catalogo" required>
                        <option value="" selected disabled>Elija una opción</option>
                        <?php foreach ($catalogos as $c) {  ?>
                            <option style="background-color:#f1d7ff" value="<?= $c->getId() ?>"  <?= $c->getId() == $producto->getId_catalogo() ? "selected" : ""   ?> ><?= $c->getNombre_catalogo() ?></option>
                        <?php  } ?>
                    </select>
                </div>

            <button type="submit" type="button" style="background-color:#ccdbfd" class="btn">Editar Producto</button>



            </form>

        </div>

    </div>

</div>