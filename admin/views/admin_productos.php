<?php

$producto = (new Producto())->lista_completa();

/*
   echo "<pre>";
   print_r($personaje);
   echo "</pre>";
   */
?>

<div class="row my-5">
    <div class="col">
        <h1 class="text-center mb-5">Administrador de productos</h1>
        <div class="row mb-5 d-flex align-items-center">
            <div>
                <?= (new Alerta())->get_alertas() ?>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th style="background-color: #e0b0ff;" scope="col">imagen</th>
                        <th style="background-color: #e0b0ff;" scope="col">id</th>
                        <th style="background-color: #e0b0ff;" scope="col">Nombre</th>
                        <th style="background-color: #e0b0ff;" scope="col">Descripcion</th>
                        <th style="background-color: #e0b0ff;" scope="col">Marca</th>
                        <th style="background-color: #e0b0ff;" scope="col">Precio</th>
                        <th style="background-color: #e0b0ff;" scope="col">Catalogo</th>
                        <th style="background-color: #e0b0ff;" scope="col">Accion</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($producto as $p) { ?>
                        <tr>
                            <td style="background-color: #fff0ff;"><img width="100px" src="../img/<?= $p->getImagen() ?>" class="img-fluid rounded" alt=""></td>
                            <th style="background-color: #fff0ff;" scope="row"><?= $p->getId() ?></th>
                            <td style="background-color: #fff0ff;"><?= $p->getNombre() ?></td>
                            <td style="background-color: #fff0ff;"><?= $p->getDescripcion() ?></td>
                            <td style="background-color: #fff0ff;"><?= $p->getMarca() ?></td>
                            <td style="background-color: #fff0ff;"><?= $p->getPrecio() ?></td>
                            <td style="background-color: #fff0ff;"><?= $p->getCatalogo() ?></td>
                            <td style="background-color: #fff0ff;">
                                <button type="button" style="background-color:#ccdbfd" class="btn mt-2"><a class="text-decoration-none text-black" href="index.php?sec=edit_producto&id=<?= $p->getId() ?>">editar</a></button>
                                <button type="button" style="background-color:#f1666d" class="btn mt-2"><a class="text-decoration-none text-black" href="index.php?sec=delete_producto&id=<?= $p->getId() ?>">eliminar</a></button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <button type="button" style="background-color:#ccdbfd" class="btn"><a class="text-decoration-none text-black" href="index.php?sec=add_producto">Cargar nuevo Producto</a></button>

        </div>
    </div>
</div>