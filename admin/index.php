<?php
$vista = $_GET['seccion'];
$method = $_GET['method'];

$vista = $method."_".$vista;

$existe = file_exists("views/$vista.php");
$vista_final = $existe ? $vista : '404';
?>

<?php require "./partials/header.php"; ?>
    <div class="container">
        <?php include ("views/$vista_final.php") ?>
    </div>
    <?php require "../partials/footer.php";?>
</body>
