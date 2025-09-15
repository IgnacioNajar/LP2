<?php
$nombre = "Ignacio";
$apellido = "Najar";
$edad = 27;
define('FECHA_NAC', '23/10/97');
define('MENSAJE_BIENVENIDA', 'Hola Mundo!');
?>

<h1><?= MENSAJE_BIENVENIDA; ?></h1>
<p>Mi nombre es <?= $nombre; ?> <?= $apellido; ?>, y tengo <?= $edad; ?> años.</p>
<p>Naci el <?= FECHA_NAC; ?></p>
