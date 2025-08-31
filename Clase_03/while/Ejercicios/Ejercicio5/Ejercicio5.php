<?php
$i = 1;
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>While: ejercicio 5</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h3>Ejercicio Par - Impar con While</h3>
        <div id="exercise-description">
            <p class="instructions">Del 1 al 10, conocer si cada numero es par o impar</p>
            <p class="instructions">Si el valor es par, incrementarlo en un 20%</p>
            <p class="instructions">Si el valor es impar, decrementarlo en un 10%</p>
        </div>

        <div id="exercise-output">
            <ul>
                <?php
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

                        echo "<li>
                            <p>$i es $tipo_valor, el $porcentaje% es $porcentaje_calculado
                            y el resultado de $operacion es $resultado</p>
                        </li>";
                        echo '<hr/>';
                        $i++;
                    } ?>
            </ul>
        </div>
    </body>
</html>
