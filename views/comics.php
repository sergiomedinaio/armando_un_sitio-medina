<?php
require_once 'libs/catalogos.php';

$id = $_GET['id'];
$id = $id ? $id : 0;

$personajes = obtenerCatalogo();

$comics = filtrarPorPersonaje($personajes, $id);

?>

<script>
    console.log("personajes: ", <?=json_encode($comics)?>);
</script>

<div class="container">
    <h1 class="text-center my-5"> <!--?=$personaje['nombre']?--></h1>
    <div class="row">
        <?php foreach ($comics as $personaje) {?>
        <div class="col-3">
            <div class="card mb-3">
                <img src="<?= $personaje['imagen'] ?>" class="card-img-top" alt="Portada de Ms. Marvel Vol. 3 #1">
                <div class="card-body">
                    <p class="fs-6 m-0 fw-bold text-danger"><?=$personaje['edicion']?></p>
                    <h5 class="card-title"><?=$personaje['titulo']?></h5>
                    <p class="card-text"><?=$personaje['descripcion']?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Guion: <?=$personaje['guion']?></li>
                    <li class="list-group-item">Arte: <?=$personaje['arte']?></li>
                    <li class="list-group-item">Publicación: <?=$personaje['publicacion']?></li>
                </ul>
                <div class="card-body">
                    <div class="fs-3 mb-3 fw-bold text-center text-danger"><?=$personaje['precio']?></div>
                    <a href="#" class="btn btn-danger w-100 fw-bold"><?=$personaje['comprar']?></a>
                </div>

            </div>
        </div>
        <?php } ?>
    </div>
</div>
