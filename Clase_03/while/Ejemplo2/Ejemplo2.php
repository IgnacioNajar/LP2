<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" />
        <title> Ejercicio 2</title>
    </head>
    <body>
        <?php
        $i = 1;  //seteo inicial de la variable de control

        while ($i <= 12) {  // Mientras la variable de control valga 12 o menos...
            //se ejecutara el bloque
            ?>

        <img src="images/<?php echo $i; ?>.JPG" title="este es el mes nro <?php echo $i; ?>" />
            <br />

            <?php
            //esta variable de control DEBE ESTAR PRESENTE
            //pues sera la q controla la condicion del while
            $i++;
        }
        ?>
            <hr />
    </body>
</html>
