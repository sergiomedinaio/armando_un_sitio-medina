<?php
?>

<div class="row">
    <div class="col-12">
        <h1 class="text-center my-5">Eliminar Artista</h1>
        <form class="row" action="actions/remove_artista_action.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input class="form-control" id="id" name="id" placeholder="">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Eliminar artista</button>
            </div>
        </form>
    </div>
</div>
