<?php
$array_paises = [
    'Argentina' => 'images/ARG.JPG',
    'Bahamas' => 'images/BAH.JPG',
    'Bolivia' => 'images/BOL.JPG',
    'Brasil' => 'images/BRA.JPG',
    'Cuba' => 'images/CUB.JPG'];

$li_html = '';

foreach ($array_paises as $index => $value) {
    $li_html .= "<li class='flag-item'>
        <img src=\"$value\" alt=\"Imagen de la bandera de $index\" title=\"Bandera de $index\">
        <span>$index</span>
    </li>";
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Foreach: ejercicio 1</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h2>Ejercicio: Array Paises</h2>
        <div id="exercise-description">
            <p id="instructions">
                Usando las imagenes dentro de la carpeta <span id="italic">"images/"</span>, respetar
                el nombre de las imagenes y generar un array con esta informacion.
                Recorrerlo y mostrar con PHP
            </p>
        </div>

        <div id="exercise-output">
            <ul>
                <?= $li_html; ?>
            </ul>
        </div>
    </body>
</html>
