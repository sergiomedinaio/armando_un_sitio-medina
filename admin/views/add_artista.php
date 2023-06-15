<?php
?>

<div class="row">
    <div class="col-12">
        <h1 class="text-center my-5">Agregar Artista</h1>
        <form class="row" action="actions/add_artista.php" method="post">
            <div class="mb-3">
                <label for="nombre_completo" class="form-label">Nombre completo</label>
                <input class="form-control" id="nombre_completo" placeholder="">
            </div>
            <div class="mb-3">
                <label for="foto_perfil" class="form-label">Foto perfil</label>
                <input class="form-control" id="foto_perfil" placeholder="">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Biografia</label>
                <textarea class="form-control" id="description" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Agregar artista</button>
            </div>
        </form>
    </div>
</div>
