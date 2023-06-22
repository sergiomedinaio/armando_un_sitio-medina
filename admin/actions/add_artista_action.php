<?php

require_once "../../classes/Artista.php";
require_once "../../classes/Connection.php";

$postData = $_POST;

try {
    $artista = (new \classes\Artista());

    $artista->add(
        $postData['nombre_completo'],
        $postData['description'],
        $postData['foto_perfil']
    );

    header("Location: ../index.php");
} catch (\Exception $e) {
    echo $e->getMessage();
}

