<?PHP

$id = $_GET['id'] ?? FALSE;

$miObjetoProducto = new Producto();
$producto = $miObjetoProducto->producto_x_id($id);


?>


<div class="row">
    <?php if (isset($producto)) { ?>
        <h1 class="text-center text-capitalize my-5"><?= $producto->getMarca() ?></h1>
        <div class="col">
            <div class="card mb-5">
                <div class="row g-0">
                    <div class="col-5">
                        <img class="img-fluid rounded-start" src="img/<?= $producto->getImagen() ?>" alt="">
                    </div>
                    <div class="col-5 d-flex flex-column p-3">
                        <div class="card-body flex-grow-0">
                            <p class="fs-2 m-0 fw-bold text-primary"><?= $producto->getNombre() ?>
                            <h2 class="card-title fs-3 mb-4"><?= $producto->getDescripcion()?></h2>
                        </div>
                        <ul class="list-group">
                            <a class="link-offset-2 link-underline link-underline-opacity-0 w-100" href="#"> <li class="list-group-item"><?= $producto->getMarca()?></li></a>
                        </ul>
                        <div class="cad-body">
                            <p class="fs-2 mb-3 fw-bold text-center bg-subtle"><?= $producto->getPrecio() ?></p>
                            <a href="index.php?sec=producto&id=<?= $producto->getId()?>" class="btn btn-outline-secondary w-100 fw-bold">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <h2 class="text-center m-5 text-danger">No se encontró el producto deseado</h2>
    <?php } ?>
