<?php
require_once "../../classes/Autenticacion.php";
require_once "../../classes/Connection.php";

$postData = $_POST;

$login = ((new \classes\Autenticacion())->logIn($postData["email"], $postData["password"]));

if($login) {
    header('location: ../index.php?seccion=artista&method=add');
} else {
    header('location: ../index.php?seccion=login');
}
