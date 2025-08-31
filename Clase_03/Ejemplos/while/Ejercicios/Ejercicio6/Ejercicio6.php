<?php
$i = 1;
$list_str = '';

while ($i <= 10) {
    if ($i % 2 == 0) {
        $tipo_numero = 'Par';
        $class_number = 'even-number';
    } else {
        $tipo_numero = 'Impar';
        $class_number = 'odd-number';
    }

    $list_str .= "<tr class=\"$class_number\">
                    <td>$i</td>
                    <td>$tipo_numero</td>
                </tr>";

    $i++;
}

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>While: ejercicio 6</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h3>Ejercicio Par - Impar con While</h3>
        <div id="exercise-description">
            <p class="instructions">Del 1 al 10 conocer si cada numero es par o impar, armando una tabla</p>
            <p class="instructions">Si el valor es par, mostrarlo con color de fondo de celda naranja</p>
            <p class="instructions">Si el valor es impar, mostrarlo sin color de fondo de celda</p>
        </div>

        <div id="exercise-output">
            <table>
                <caption>
                    Numeros pares e impares
                </caption>
                <thead>
                    <tr>
                        <th scope="col">Numero</th>
                        <th scope="col">Par o impar</th>
                    </tr>
                </thead>
                <tbody>
                    <?= $list_str; ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
