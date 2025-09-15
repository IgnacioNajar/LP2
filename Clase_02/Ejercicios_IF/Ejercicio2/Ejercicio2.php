<?php
/*
* Sabiendo que un numero es PAR si su resto de division es CERO,
* asignar un valor entero a una variable llamada $Numero.
* Asignar el resultado de la operacion para conocer el resto
* en otra variable llamada $Resto
* Operar con una estructura condicional para saber
* si el resto calculado es cero en ese caso mostrar el mensaje
* correspondiente si no es cero mostrar el otro mensaje.
*/

define('TITULO', 'Clase 2 Ej 2');
$numero = 35;
$resto = $numero % 2;
?>
<html>
    <head>
        <title><?= TITULO; ?></title>
    </head>
    <body>
        <?php
        if ($resto == 0) { ?>
            <img src='images/EsPar.JPG' /> <br />
            <strong><?= $numero; ?> es PAR</strong>
            <hr />
        <?php
        } else { ?>
            <img src='images/NoEsPar.JPG' /> <br />
            <strong><?= $numero; ?> es IMPAR</strong>
            <hr />
        <?php
        } ?>
    </body>
</html>
