<?php
define('TITULO', 'Clase 2');
$seccion = 'Operadores';
$operacion = 'sumar';
$num1 = 100;
$num2 = 30;
$resultado = $num1 + $num2;
$color = '#ff0000';
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?= TITULO; ?></title>
    </head>
    <body>
        <div>
            <h2>Tarea de <?= $seccion; ?></h2>
            <p>
                El resultado de <strong><?= $operacion; ?></strong>
                el <strong><?= $num1; ?></strong>
                y el <strong><?= $num2; ?></strong> es
                <strong style="color: <?= $color; ?>">
                    <?= $resultado; ?>
                </strong>
            </p>
        </div>
    </body>
</html>
