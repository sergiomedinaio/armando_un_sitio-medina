<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin de mi Tiendita</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Admin de mi Tiendita</h1>
        <p>Esto es el admin de mi tiendita</p>
        <?php
            require "views/add_artista.php";
            require "views/update_artista.php";
        ?>
    </div>
</body>
