<?php
$array_estaturas = [1.85, 2.00, 1.58, 1.88, 1.70];

$li_html = '';
$extra_counter = 1;
$heights_added = 0;

for ($i = 0; $i < count($array_estaturas); $i++) {
    $li_html .= "<li>
        <p>El valor $extra_counter de las estaturas es: <span>". number_format($array_estaturas[$i], 2, ".", "") ."</span>
        </p>
    </li>";
    
    $extra_counter++;
    $heights_added += $array_estaturas[$i];
}

$average = $heights_added / count($array_estaturas);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Arrays: ejercicio 2</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h2>Array Estaturas</h2>
        <div id="exercise-instructions">
            <p class="instructions">
                Generar un array que contenga 5 elementos, comenzando desde el elemento 0
            </p>
            <p class="instructions">
                Cada elemento debe contener valores numericos decimales, como la estatura de 5 personas
            </p>
            <p class="instructions">
                Mostrar al navegante cada elemento del array
            </p>
            <p class="instructions">
                Calcular el valor solicitado y mostrar al final dentro de comillas dobles (sin concatenar)
            </p>
        </div>

        <div id="exercise-output">
            <ul>
                <?= $li_html; ?>
            </ul>
            <p id="result">El promedio de estaturas es: <?= $average; ?></p>
        </div>
    </body>
</html>
