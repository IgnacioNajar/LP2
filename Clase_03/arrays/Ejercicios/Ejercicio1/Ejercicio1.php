<?php
$array_estaturas = [1.85, 2.00, 1.58, 1.88, 1.70];

$list_html = '';
$extra_counter = 1;

for ($i = 0; $i < count($array_estaturas); $i++) {
    $list_html .= "<li>
        <p>
            El valor $extra_counter de las estaturas es: <span>" .number_format($array_estaturas[$i], 2, ".", "")."</span>
        </p>
    </li>";
    $extra_counter++;
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Arrays: ejercicio 1</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h2>Array Estaturas</h2>
        <div id="exercise-description">
            <p class="instructions">
                Generar un array que contega 5 elementos, comenzando desde el elemento 0
            </p>
            <p class="instructions">
                Cada elemento debe contener valores numericos decimales, como la estatura de 5 personas
            </p>
            <p class="instructions">
                Mostrar al navegante cada elemento del array
            </p>
        </div>
        <div class="exercise-output">
            <ul>
                <?= $list_html; ?>
            </ul>
        </div>
    </body>
</html>
