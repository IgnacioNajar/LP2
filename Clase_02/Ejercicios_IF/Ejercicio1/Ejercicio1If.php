<?php
$temperatura = 40;
/*
Dada una variable llamada Temperatura, asignar un valor: 25, 30 o 40.
 * Segun el numero asignado, debera mostrar la imagen correspondiente
 * siguiendo estas condiciones:
 *
 * Si la temperatura es de 25 grados, mostrar la imagen menos_calor.jpg
 * si la termperatura es 30 grados, mostrar la imagen calor.jpg
 * si la temperatura es de 40 grados, mostrar la imagen mucho_calor.jpg
 * con los mensajes correspondientes.
 *  * si no es ninguno de esos 3 valores, mostrar el mensaje de error.
Hacer dos scripts, uno con IF y otro con Switch.
 *  */
$Titulo="Clase 02 Ej 1 con IF";
?>
<html>
    <head>
        <title><?php echo $Titulo; ?></title>
    </head>
    <body>
        <?php
        if ($temperatura == 25) { ?>
            <img src='images/menos_calor.JPG' /> <br />
            La temperatura es de <strong>25 grados</strong>
            <hr />

        <?php
        } else if ($temperatura == 30) { ?>
            <img src='images/calor.JPG' /> <br />
            La temperatura es de <strong>30 grados</strong>
            <hr />

        <?php
        } else if ($temperatura == 40) { ?>
            <img src='images/mucho_calor.JPG' /> <br />
            La temperatura es de <strong>40 grados</strong>
            <hr />

        <?php
        } else { ?>
            La temperatura de <strong> es incorrecta</strong>
            <hr />
        <?php
        } ?>
    </body>
</html>
