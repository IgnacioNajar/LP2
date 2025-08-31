<?php
$valor = 20;

if ($valor % 2 == 0) {
    $porcentaje = 20;
    $porcentaje_calculado = (($valor * $porcentaje) / 100);
    $resultado = $valor + $porcentaje_calculado;
    $tipo_operacion = 'incrementarlo';
    $tipo_valor = 'par';
} else {
    $porcentaje = 10;
    $porcentaje_calculado = (($valor * $porcentaje) / 100);
    $resultado = $valor - $porcentaje_calculado;
    $tipo_operacion = 'decrementarlo';
    $tipo_valor = 'impar';
}

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>While: ejercicio 4</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h3>Ejercicio</h3>
        <div id="exercise-description">
            <p class="instruction">Dado un valor de variable, conocer si es par o impar</p>
            <p class="instruction">Si el valor es par, incrementarlo en su 20%</p>
            <p class="instruction">Si el valor es impar, decrementarlo en su 10%</p>
        </div>

        <div id="exercise-output">
            <p id="initial-value">La variable inicial vale <?= $valor; ?></p>
            <hr/>
            <p id="result-description">El valor <?= $valor; ?> es <?= $tipo_valor; ?>,
            el <?= $porcentaje; ?>% es <?= $porcentaje_calculado; ?> y el resultado de <?= $tipo_operacion; ?>
            es <?= $resultado; ?></p>
        </div>
    </body>
</html>
