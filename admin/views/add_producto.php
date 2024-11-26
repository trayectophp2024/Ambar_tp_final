<div class="row my-5">
    <div class="col">
        <h1 class="text-center mb-5">Agregar nuevo producto</h1>

        <div class="row mb-5 d-flex align-items-center">
            <form class="row g-3" action="actions/add_maquillaje_acc.php" method="POST" enctype="multipart/form-data">
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
               
                <button type="submit" style="background-color:#ccdbfd" class="btn"><a href="index.php?sec=add_proucto">Cargar producto</a></button>
            </form>
        </div>
    </div>
</div>