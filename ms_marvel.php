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
    <div class="container">

        <h1 class="text-center my-5"> Comics de Ms. Marvel</h1>
        <div class="row">

            <div class="col-3">
                <div class="card mb-3">
                    <img src="img/covers/mmv301.webp" class="card-img-top" alt="Portada de Ms. Marvel Vol. 3 #1">
                    <div class="card-body">
                        <p class="fs-6 m-0 fw-bold text-danger">Ms. Marvel Vol. 3 #1</p>
                        <h5 class="card-title">No Es Normal. Parte 1 de 5: Metamorfosis</h5>
                        <p class="card-text">Kamala Khan es una chica normal y corriente de Jersey City, hasta que, de repente, se ve dotada de dones extraordinarios. ¿Pero quién es realmente la nueva Ms. Marvel? ¿Adolescente? ¿Musulmana? ¿Inhumana?</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Guion: G. Willow Wilson</li>
                        <li class="list-group-item">Arte: Adrian Alphona</li>
                        <li class="list-group-item">Publicación: Abril 2014</li>
                    </ul>
                    <div class="card-body">
                        <div class="fs-3 mb-3 fw-bold text-center text-danger">$1.200,00</div>
                        <a href="#" class="btn btn-danger w-100 fw-bold">COMPRAR</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <footer class="bg-secondary text-light text-center">
        Sergio Medina 2023
    </footer>
</body>

</html>