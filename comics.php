<h1 class="text-center my-5"> Comics de <?= $serieSeleccionada; ?></h1>
<div class="row">

    <?PHP foreach ($serie as $comic) { ?>
        <div class="col-3">
        <div class="card mb-3">
            <img src="img/covers/<?= $comic['portada']; ?>" class="card-img-top" alt="Portada de <?= $comic['serie']; ?> Vol.<?= $comic['volumen']; ?> #<?= $comic['numero']; ?>">
            <div class="card-body">
                <p class="fs-6 m-0 fw-bold text-danger"><?= $comic['serie']; ?> Vol.<?= $comic['volumen']; ?> #<?= $comic['numero']; ?></p>
                <h2 class="card-title"><?= $comic['titulo']; ?></h2>
                <p class="card-text"><?= $comic['bajada']; ?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><span class="fw-bold">Guion:</span> <?= $comic['guion']; ?></li>
                <li class="list-group-item"><span class="fw-bold">Arte:</span> <?= $comic['arte']; ?></li>
                <li class="list-group-item"><span class="fw-bold">Publicación:</span> <?= $comic['publicacion']; ?></li>
            </ul>
            <div class="card-body">
                <div class="fs-3 mb-3 fw-bold text-center text-danger">$<?= $comic['precio']; ?></div>
                <a href="#" class="btn btn-danger w-100 fw-bold">COMPRAR</a>
            </div>

        </div>
    </div>
    <?PHP } ?>

</div>