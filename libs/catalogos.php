<?php
function obtenerCatalogo() {
    $content = file_get_contents('data/info.json');
    $data = json_decode($content, true);
    return $data['comics'];
}

function filtrarPorPersonaje($comics, $personaje) {
    $comics_filtrados = [];
    foreach ($comics as $comic) {
        if ($comic['personaje'] == $personaje) {
            $comics_filtrados[] = $comic;
        }
    }
    return $comics_filtrados;
}

?>