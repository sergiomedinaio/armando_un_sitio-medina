<?php
function obtenerCatalogoPersonajes() {
    $content = file_get_contents('data/info.json');
    $data = json_decode($content, true);
    return $data['personajes'];
}
?>