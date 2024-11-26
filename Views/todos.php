<?php



$miProductoCatalogo = new Producto();

$productos = $miProductoCatalogo->lista_completa();


?>

<h1 class="text-center my-5">Todos los productos</h1>

<div class="row">
    <?php if (count($productos)) { ?>
        <?php foreach ($productos as $cat) { ?>


            <div class="col-3">
                <div class="card mb-3">
                    <img src="img/<?= $cat->getImagen() ?>" class="card-img-top" alt="" style="max-height: 350px; overflow: hidden;">
                    <div class="card-body" style="height:125px; overflow: hidden;">
                        <p class="fs-6 m-0 fw-bold "><?= $cat->getNombre() ?> </p>
                        <h5 class="card-title"><?= $cat->getMarca() ?></h5>
                        <p class="card-text"><?= $cat->getDescripcion() ?></p>
                    </div>

                    <div class="card-body">
                        <p class="fs-3 mb-3 fw-bold text-pink text-center">$<?= $cat->getPrecio() ?></p>
                        <a href="index.php?sec=producto&id=<?= $cat->getId() ?>" class="btn btn-outline-secondary w-100 fw-bold">VER MÁS</a>
                    </div>
                </div>
            </div>
        <?php } ?>

    <?php } else { ?>
        <div class="col-12">
            <h2 class="text-center text-danger mb-5">No se encontraron Productos...</h2>
        </div>



    <?php } ?>


</div>