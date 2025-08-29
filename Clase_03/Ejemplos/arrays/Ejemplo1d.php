<?php
//otra forma de darle valores a un array
    $Marcas[]="Adidas";
    $Marcas[]="Nike";
    $Marcas[]="Topper";
    $Marcas[]="Reebok";
/*
Noten la sintaxis: 
a la variable $Marcas se le va asignando un valor,
ahora NO especificando cada subelemento con su indice ,
pero van los corchetes vacios.
De esta manera PHP entiende que seran indices enteros correlativos, 
 * que comienzan en 0.
Al finalizar cada asignacion va un punto y coma ';'
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
