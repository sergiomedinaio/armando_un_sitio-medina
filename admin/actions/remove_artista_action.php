<?php

require_once "../../classes/Artista.php";
require_once "../../classes/Connection.php";

$postData = $_POST;

try {
    $artista = (new \classes\Artista());

    $artista->remove(
        $postData['id']
    );

    header("Location: ../index.php");
} catch (\Exception $e) {
    echo $e->getMessage();
}

