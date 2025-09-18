<?php

    $fecha_nacimiento = '23/10/1997 14:45:00';

    list($fecha, $hora) = explode(" ", $fecha_nacimiento);
    list($dia, $mes, $anio) = explode("/", $fecha);
    list($hora, $minutos, $segundos) = explode(":", $hora);

    $time_stamp = mktime($hora, $minutos, $segundos, $mes, $dia, $anio);

    $dias = [
        "Sunday" => "Domingo",
        "Monday" => "Lunes",
        "Tuesday" => "Martes",
        "Wednesday" => "Miércoles",
        "Thursday" => "Jueves",
        "Friday" => "Viernes",
        "Saturday" => "Sábado"
    ];

    $nombre_dia_semana = $dias[date("l", $time_stamp)];
    $numero_dia_semana = date("w", $time_stamp);
    $numero_dia_anio = date("z", $time_stamp);
    $anio_bisiesto = (date("L", $time_stamp) == 1) ?
    "sí" : "no";


    //Si fueran digitos individuales
    //$fecha_solo_numeros = str_replace(["/", ":", " "], "", $fecha_nacimiento);
    //$digitos_individuales_fecha = str_split($fecha_solo_numeros);

    $suma_total = 0;

    /*foreach ($digitos_individuales_fecha as $digito) {
        $suma_total += (int)$digito;
    };*/

    $array_fecha = explode("/", $fecha);
    $array_hora = explode(":", $hora);

    //Merge de dos array
    /*foreach (array_merge($array_fecha, $array_hora) as $num) {
        $suma_total += (int)$num;
    };*/

    foreach ($array_fecha as $num) {
        $suma_total += (int)$num;
    };

    foreach ($array_hora as $num) {
        $suma_total += (int)$num;
    };
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 4</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <header class="main-header">
            <h1>Funciones de Fecha con PHP:</h1>
        </header>

        <section class="ejercicio">
            <article class="descripcion">
                <h2>Ejercicio</h2>
                <ul>
                    <li>Completa una variable con tu fecha y hora de cumpleaños: formato español dd/mm/yyyy hh:mm:ss</li>
                    <li>Hacer una variable para mostrar el dia de la semana que naciste [texto] [Mon, Tue...]</li>
                    <li>Hacer una variable para mostrar el nro de dia de la semana que naciste  [0 a 6]</li>
                    <li>Hacer una variable para mostrar el nro de dia del año que naciste [0 a 365]</li>
                    <li>Mostrar si naciste en un año bisiesto [si o no]</li>
                    <li>Mostrar la suma total de cada numero q conforma tu fecha y hora de nacimiento.</li>
                </ul>
            </article>

            <article class="resolucion">
                <h2>Resolucion:</h2>
                <p>Yo, <strong>Ignacio Najar</strong>, he nacido en la siguiente fecha y hora: <span class="resaltado color-negro"><?= $fecha_nacimiento; ?></span ></p>
                <p>
                    Nombre día de semana:
                    <span class="resaltado"><?= $nombre_dia_semana; ?></span>
                </p>
                <p>
                    Número día de la semana:
                    <span class="resaltado"><?= $numero_dia_semana; ?></span>
                </p>
                <p>
                    Número del dia del año:
                    <span class="resaltado"><?= $numero_dia_anio; ?></span>
                </p>
                <p>
                    El año
                    <span class="resaltado"><?= $anio_bisiesto; ?></span>
                    fue bisiesto
                </p>
                <p>
                    Suma total de cada número que conforma mi fecha y hora de nacimiento:
                    <span class="resaltado"><?= $suma_total; ?></span>
                </p>
            </article>
        </section>
    </body>
</html>
