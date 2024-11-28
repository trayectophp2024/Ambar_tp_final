<?php

$catalogos = (new Catalogo())->catalogo_completo();


?>


<div class="row my-5">
    <div class="col">
        <h1 class="text-center mb-5">Agregar nuevo producto</h1>

        <div class="row mb-5 d-flex align-items-center">
            <form class="row g-3" action="actions/add_productos_acc.php" method="POST" enctype="multipart/form-data">
                <div class="col-6 mb-3">
                    <label class="form-label" for="nombre">Nombre:</label>
                    <input style="background-color:#f1d7ff" type="text" class="form-control" name="nombre" id="nombre" required>
                </div>
                <div class="col-6 mb-3">
                    <label class="form-label" for="alias">Descripcion:</label>
                    <input style="background-color:#f1d7ff" type="text" class="form-control" name="descripcion" id="descripcion" required>
                </div>
                <div class="col-6 mb-3">
                    <label  class="form-label" for="imagen">Imagen:</label>
                    <input style="background-color:#f1d7ff" type="file" class="form-control" name="imagen" id="imagen" >
                </div>
                <div class="col-6 mb-3">
                    <label class="form-label" for="creador">Marca</label>
                    <input style="background-color:#f1d7ff" type="text" class="form-control" name="marca" id="marca" required>
                    <div class="form-text">En caso que sean multiples marcas, separar los nombres con comas</div>
                </div>
                <div class="col-6 mb-3">
                    <label class="form-label" for="primera_aparicion">precio:</label>
                    <input style="background-color:#f1d7ff" type="number" class="form-control" name="precio" id="precio" required>
                    <div class="form-text">Ingresar un precio</div>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="id_catalogo" class="form-label">Catalogo</label>
                    <select style="background-color:#f1d7ff" class="form-select" name="id_catalogo" id="id_catalogo" required>
                        <option value="" selected disabled>Elija una opción</option>
                        <?php foreach ($catalogos as $c) {  ?>
                            <option style="background-color:#f1d7ff" value="<?= $c->getId() ?>"><?= $c->getNombre_catalogo() ?></option>
                        <?php  } ?>
                    </select>
                </div>
               
                <button type="submit" style="background-color:#ccdbfd" class="btn">Cargar producto</button>
            </form>
        </div>
    </div>
</div>