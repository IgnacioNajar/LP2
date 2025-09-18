<?php
$fechas[0]['Cumple'] = "25/07/1987";  //ok
$fechas[1]['Cumple'] = "31/02/2000";  //fecha incorrecta
$fechas[2]['Cumple'] = "07/14/1990"; //fecha incorrecta
$fechas[3]['Cumple'] = "31/09/1900"; //fecha incorrecta
$fechas[4]['Cumple'] = "12/10/1980"; //ok
$fechas[5]['Cumple'] = "29/02/2014"; //fecha incorrecta
$fechas[6]['Cumple'] = "12/32/2001"; //fecha incorrecta
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio2</title>
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
                    Utilizar las funciones que brinda php para explotar la fecha y corroborar q una fecha sea correcta.
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
                    $array_nuevo = explode("/", $fecha['Cumple']);

                    if (checkdate($array_nuevo[1], $array_nuevo[0], $array_nuevo[2])) {
                        echo "<p>La fecha es correcta</p>";
                    } else {
                        echo "<p>La fecha es incorrecta</p>";
                    }
                    ?>
                </article>
            <?php endforeach; ?>
        </section>
    </body>
</html>
