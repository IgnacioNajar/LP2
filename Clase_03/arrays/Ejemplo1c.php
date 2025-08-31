<?php
//otra forma de darle valores a un array
    $Marcas[0]="Adidas";
    $Marcas[1]="Nike";
    $Marcas[2]="Topper";
    $Marcas[3]="Reebok";
/*
Noten la sintaxis: 
a la variable $Marcas se le va asignando un valor,
especificando cada subelemento con su indice entre corchetes.
Al finalizar la sentencia va un punto y coma ';'
*/
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8" /> 
        <title> Arrays </title>
    </head>
    <body>
        <h3>Array $Marcas</h3>
        <?php echo 'El 1er elemento contiene como valor: <strong>' . $Marcas[0] . '</strong> '; ?>
        <br />
        <?php
        echo 'El 2do elemento contiene como valor: <strong>' . $Marcas[1] . '</strong> ';
        ?>
        <br />
        <?php
        echo 'El 3er elemento contiene como valor: <strong>' . $Marcas[2] . '</strong> ';
        ?>
        <br />
        <?php
        echo 'El 4to elemento contiene como valor: <strong>' . $Marcas[3] . '</strong> ';
        ?>
        <br />
    </body>
</html>
