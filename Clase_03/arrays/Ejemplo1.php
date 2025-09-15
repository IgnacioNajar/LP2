<?php
//una forma de darle valores a un array
$Marcas = array(  0 => "Adidas",
                    1 => "Nike",
                    2 => "Topper",
                    3 => "Reebok"
                );
/*
Noten la sintaxis:
a la variable $Marcas le es asignado un array que contiene las posiciones
con sus correspondientes valores, definidos entre los parentesis.
Para asignar el par ordenado indice/valor se usa el igual seguido del mayor '=>'
Para separar cada elemento se una coma ','
Al finalizar la sentencia va un punto y coma ';'
 *  */
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
