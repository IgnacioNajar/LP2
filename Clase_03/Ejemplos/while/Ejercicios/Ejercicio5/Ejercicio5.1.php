<?php
$i = 1;
$lista_html = '';

while ($i <= 10) {
    if ($i % 2 == 0) {
        $porcentaje = 20;
        $porcentaje_calculado = ($i * $porcentaje) / 100;
        $resultado = $i + $porcentaje_calculado;
        $operacion = 'incrementarlo';
        $tipo_valor = 'par';
    } else {
        $porcentaje = 10;
        $porcentaje_calculado = ($i * $porcentaje) / 100;
        $resultado = $i - $porcentaje_calculado;
        $operacion = 'decrementarlo';
        $tipo_valor = 'impar';
    }

    $lista_html .= "<li>
        <p>$i es $tipo_valor, el $porcentaje% es $porcentaje_calculado
        y el resultado de $operacion es $resultado</p>
        <hr/>
    </li>";

    $i++;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>While: ejercicio 5</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h3>Ejercicio Par - Impar con While</h3>

    <div id="exercise-description">
        <p class="instructions">Del 1 al 10, conocer si cada número es par o impar</p>
        <p class="instructions">Si el valor es par, incrementarlo en un 20%</p>
        <p class="instructions">Si el valor es impar, decrementarlo en un 10%</p>
    </div>

    <div id="exercise-output">
        <ul>
            <?= $lista_html; ?>
        </ul>
    </div>
</body>
</html>
