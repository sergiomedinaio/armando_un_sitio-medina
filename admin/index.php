<?php
require_once "../classes/Autenticacion.php";
session_start();
if((new \classes\Autenticacion())->checkLogin()) {
    $vista = $_GET['seccion'];
    $method = $_GET['method'];
} else {
    $method = "";
    $vista = "login";
}

$vista = $method ? ($method."_".$vista) : $vista;

$existe = file_exists("views/$vista.php");
$vista_final = $existe ? $vista : '404';
?>

<?php require "./partials/header.php"; ?>
    <div class="container">
        <?php include ("views/$vista_final.php") ?>
    </div>
    <?php require "../partials/footer.php";?>
</body>
