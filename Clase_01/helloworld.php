<?php
$nombre = "Ignacio";
$apellido = "Najar";
$edad = 27;
define('FECHA_NAC', '23/10/97');
define('MENSAJE_BIENVENIDA', 'Hola Mundo!');
$menor_de_edad = False;
?>
<h1><?= MENSAJE_BIENVENIDA; ?></h1>
<p>Mi nombre es <?= $nombre; ?> <?= $apellido; ?>, y tengo <?= $edad; ?> años.</p>
<p>Naci el <?= FECHA_NAC; ?></p>
<p> Soy menor de edad? <?= $menor_de_edad; ?></p>
