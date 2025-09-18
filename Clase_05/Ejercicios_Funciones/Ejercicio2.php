<?php
$fechas[0]['Cumple'] = "25/07/1987 00:00:00";  //estos son valores con fecha/hora
$fechas[1]['Cumple'] = "31/02/2000 22:30:00";
$fechas[2]['Cumple'] = "07/14/1990 10:00:23";
$fechas[3]['Cumple'] = "31/09/1900 22:00:00";
$fechas[4]['Cumple'] = "12/10/1980 00:33:00";
$fechas[5]['Cumple'] = "29/02/2014 14:33:00";
$fechas[6]['Cumple'] = "12/32/2001 00:22:00";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio3</title>
        <style>
            .introduccion-ejercicio,
            .fecha-bloque {
                border-bottom: 1px solid #b0b0b0
            }

            header h1 {
                margin-bottom: 0;
            }

            ul {
                margin-left: 0;
                padding-left: 0;
                list-style-position: inside;
            }

            p {
                font-weight: bold;
                margin: 0.5rem 0;
            }

            h3 {
                margin: 0.5rem 0;
            }

            pre {
                margin: 0.5rem 0;
            }
        </style>
    </head>
    <body>
        <header class="introduccion-ejercicio">
            <h1>Ejercicio 2 con funciones</h1>
            <ul>
                <li>

                    Recorrer el array e ir informando si su fecha es correcta o no.
                    Utilizar las funciones q brinda php para explotar la fecha y corroborar q una fecha sea correcta.
                </li>
                <li>
                    Las fechas estan en formato Español: dd/mm/yyyy
                </li>
            </ul>
        </header>

        <section class="fecha-container">
            <?php foreach ($fechas as $index => $fecha): ?>
                <article class="fecha-bloque">
                    <h3>Fecha <?= $index + 1; ?></h3>

                    <!-- Mostrar array completo -->
                    <pre><?php print_r($fecha); ?></pre>

                    <?php
                    // Separar la fecha de cumpleaños en partes
                    $partes_fecha = explode("/", $fecha['Cumple']);
                    $anio_hora = explode(" ", $partes_fecha[2]);
                    $dia = (int)$partes_fecha[0];
                    $mes = (int)$partes_fecha[1];
                    $anio = (int)$anio_hora[0];

                    $fecha_valida = (checkdate($mes, $dia, $anio));
                    echo $fecha_valida ?
                    "<p>La fecha es correcta</p>" : "<p>La fecha es incorrecta</p>";
                    ?>

                </article>
            <?php endforeach; ?>
        </section>
    </body>
</html>
