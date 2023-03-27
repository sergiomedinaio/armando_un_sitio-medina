<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Tiendita de Comics</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">La Tiendita de Comics</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="quienes_somos.php">¿Quienes somos?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ms_marvel.php">Ms. Marvel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hawkeye.php">Hawkeye / Ojo de Halcón</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="envios.php">Envios</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container">
        <div class=" d-flex justify-content-center p-5">
            <div>
                <h1 class="text-center mb-5 fw-bold">¡Envíos gratis a todo el país!<br>Recibilo en tu casa, o retiralo por una de nuestras sucursales.</h1>
                <div class="row mb-5 d-flex align-items-center">
                    <div class="col">
                        <p class=" fs-4 text-center">Phasellus maximus, diam eu tristique sagittis, elit ante molestie enim, nec venenatis quam magna quis augue. Morbi porttitor feugiat placerat. Ut lobortis lorem sed nunc sollicitudin finibus. Nulla faucibus quam in tellus aliquam luctus. Nam scelerisque porta purus vestibulum suscipit. Donec non varius ex, tincidunt efficitur mi. Suspendisse at sem id orci fermentum elementum nec at felis. Ut mattis porta luctus. Integer pretium odio eu dui lobortis posuere. Aliquam pulvinar eget ante eget pellentesque. Quisque sollicitudin elementum ex a iaculis.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php include('partials/footer.php') ?>