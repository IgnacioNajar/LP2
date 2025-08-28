<?php
define('TITULO', 'Clase 2: Operadores');
$seccion = 'operadores';

//Suma
$primer_operacion = 'Sumar';
$num1 = 100;
$num2 = 30;
$resultado_suma = $num1 + $num2;

//Resta
$segunda_operacion = 'Restar';
$resultado_resta = $num1 - $num2;

//Multiplicacion
$tercer_operacion = 'Multiplicar';
$resultado_multiplicacion = $num1 * $num2;

//Division
$cuarta_operacion = 'Dividir';
$resultado_division = $num1 / $num2;
?>

<!DOCTYPE html>
<html lang=es>
    <head>
        <title><?= TITULO; ?></title>
        <meta charset="utf-8">
        <style>
            hr {
                height: 1px;
                width: 30em;
                background-color: gray;
                border: none;
                margin-left: 0;
                margin-right: auto;
            }
        </style>
    </head>
    <body>
        <h2>Tarea de <?= $seccion; ?></h2>
        <!--Suma-->
        <?php $color = '#ff0000'; ?>
        <p>
            El resultado de
            <strong><?= $primer_operacion; ?></strong>
            el <strong><?= $num1; ?></strong>
            y el <strong><?= $num2; ?></strong>
            es <strong style="color: <?= $color; ?>"><?= $resultado_suma; ?></strong>
        </p>
        <hr>
        <!--Resta-->
        <?php $color = '#0000ff'; ?>
        <p>
            El resultado de
            <strong><?= $segunda_operacion; ?></strong>
            el <strong><?= $num1; ?></strong>
            y el <strong><?= $num2; ?></strong>
            es <strong style="color: <?= $color; ?>"><?= $resultado_resta; ?></strong>
        </p>
        <hr/>
        <!--Multiplicacion-->
        <?php $color = '#007f9c'; ?>
        <p>
            El resultado de
            <strong><?= $tercer_operacion; ?></strong>
            el <strong><?= $num1; ?></strong>
            y el <strong><?= $num2; ?></strong>
            es <strong style="color: <?= $color; ?>"><?= $resultado_multiplicacion; ?></strong>
        </p>
        <hr/>
        <!--Division-->
        <?php $color = '#ff0000'; ?>
        <p>
            El resultado de
            <strong><?= $cuarta_operacion; ?></strong>
            el <strong><?= $num1; ?></strong>
            y el <strong><?= $num2; ?></strong>
            es <strong style="color: <?= $color; ?>"><?= $resultado_division; ?></strong>
        </p>
        <hr/>
    </body>
</html>
