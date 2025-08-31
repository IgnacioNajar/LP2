<?php
$i = 1;
$number = 5;
$list_html;

for ($i = 1; $i <= 10; $i++) {
    $resultado = $i * $number;
    $list_html .= "$i * $number = $resultado";
    $list_html .= '<hr/>';
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>For: ejercicio 1</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h1>Probando el For</h1>
        <div div="exercise-description">
            <p class="instruction">Tabla numerica del <?= $number; ?></p>
        </div>
        <div div="exercise-output">
            <?= $list_html; ?>
        </div>
    </body>
</html>
