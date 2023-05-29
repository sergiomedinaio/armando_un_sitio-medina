<?php
use classes\Comic;
use classes\Guionista;

require_once 'classes/Comic.php';
require_once 'classes/Guionista.php';
require_once 'classes/Connection.php';

$id = $_GET['id'];
$id = $id ? $id : "";

$miComic = new Comic();
$comics= $miComic->getCatalogById($id);

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
                <img src="<?= $personaje->getImagen() ?>" class="card-img-top" alt="Portada de Ms. Marvel Vol. 3 #1">
                <div class="card-body">
                    <p class="fs-6 m-0 fw-bold text-danger"><?=$personaje->getEdicion()?></p>
                    <h5 class="card-title"><?=$personaje->getTitulo()?></h5>
                    <p class="card-text"><?=$personaje->getDescripcionCorta()?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Guion: <?=$personaje->getGuion()?></li>
                    <li class="list-group-item">Arte: <?=$personaje->getArte()?></li>
                    <li class="list-group-item">Publicación: <?=$personaje->getPublicacion()?></li>
                </ul>
                <div class="card-body">
                    <div class="fs-3 mb-3 fw-bold text-center text-danger">$ <?=$personaje->getPrecioFormateado()?></div>
                    <a href="#" class="btn btn-danger w-100 fw-bold"><?=$personaje->getComprar()?></a>
                </div>

            </div>
        </div>
        <?php } ?>
    </div>
</div>


