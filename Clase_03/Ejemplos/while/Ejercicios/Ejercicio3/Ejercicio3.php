<?php
$valor = 500;

if ($valor % 2 == 0) {
    $porcentaje = 20;
    $tipo_valor = 'par';
} else {
    $porcentaje = 10;
    $tipo_valor = 'impar';
}

$resultado = ($valor * $porcentaje) / 100;
?>

<!DOCTYPE html>
<html lang=es>
    <head>
        <title>While: ejercicio 3</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h3>Ejercicio - Par / Impar</h3>
        <p class="h4-like">Dado un valor de variable, conocer si es par o impar.</p>
        <p class="h4-like">Si el valor es par: calcular su 20%</p>
        <p class="h4-like">Si el valor es impar, calcular su 10%</p>
        <p id="p1">La variable inicial vale <?= $valor; ?></p>
        <hr/>
        <p id="p2"><?= "$valor es $tipo_valor, su $porcentaje% es $resultado"; ?></p>
    </body>
</html>
