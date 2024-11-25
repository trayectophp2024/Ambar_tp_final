

<div class="row">
    <?php if (isset($cat)) { ?>
        <h1 class="text-center text-capitalize my-5"><?= $cat['categoria'] ?></h1>
        <div class="col">
            <div class="card mb-5">
                <div class="row g-0">
                    <div class="col-5">
                        <img class="img-fluid rounded-start" src="img/<?= $cat['imagen'] ?>" alt="<?= $cat['producto'] ?>">
                    </div>
                    <div class="col-5 d-flex flex-column p-3">
                        <div class="card-body flex-grow-0">
                            <p class="fs-2 m-0 fw-bold text-primary"><?= $cat['producto'] ?>
                            <h2 class="card-title fs-3 mb-4"><?= $cat['descripcion'] ?></h2>
                        </div>
                        <ul class="list-group">
                            <a class="link-offset-2 link-underline link-underline-opacity-0 w-100" href="#"> <li class="list-group-item"><?= $cat['marca'] ?></li></a>
                        </ul>
                        <div class="cad-body">
                            <p class="fs-2 mb-3 fw-bold text-center bg-subtle"><?= $cat['precio'] ?></p>
                            <a href="index.php?sec=producto&id=<?= $cat['id'] ?>" class="btn btn-outline-secondary w-100 fw-bold">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <h2 class="text-center m-5 text-danger">No se encontró el producto deseado</h2>
    <?php } ?>
