<?php
$id = $_GET['id'];
$id = $id ? $id : 0;


$personajes = [
    [
        "nombre" => "Ms. Marvel",
        "titulo" => "Ms. Marvel Vol. 3 #1",
        "descripcion" => "Kamala Khan es una chica normal y corriente de Jersey City, hasta que, de repente, se ve dotada de dones extraordinarios. ¿Pero quién es realmente la nueva Ms. Marvel? ¿Adolescente? ¿Musulmana? ¿Inhumana?",
        "imagen" => "img/covers/mmv301.webp",
        "guion" => "G. Willow Wilson",
        "edicion" => "Edición #1",
        "arte" => "Adrian Alphona",
        "publicacion" => "Abril 2014",
        "precio" => "$1.200,00",
        "comprar" => "COMPRAR"
    ],
    [
            "nombre" => "Hawkeye",
            "titulo" => "Hawkeye Vol. 1 #1",
            "descripcion" => "El arquero verde Clint Barton se enfrenta a un nuevo enemigo: su propia vida. ¿Cómo puede un hombre que ha vivido tantas aventuras seguir siendo un héroe? ¿Y qué sucede cuando el héroe se convierte en villano?",
            "imagen" => "img/covers/hev401.webp",
            "guion" => "Matt Fraction",
            "edicion" => "Edición #1",
            "arte" => "David Aja",
            "publicacion" => "Abril 2012",
            "precio" => "$1.200,00",
            "comprar" => "COMPRAR"
    ]
];

$personaje = $personajes[$id];
?>

<script>
    console.log(<?=json_encode($personajes)?>);
</script>

<div class="container">
    <h1 class="text-center my-5"> <?=$personaje['nombre']?></h1>
    <div class="row">
        <div class="col-3">

        </div>
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
    </div>
</div>
