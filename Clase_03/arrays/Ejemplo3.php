<?php
//otra forma de darle valores a un array
   $Marcas[0]="Adidas";
   $Marcas[1]="Nike";
   $Marcas[2]="Topper";   
   $Marcas[3]="Reebok";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html"  /> 
        <title> Arrays </title>
    </head>
    <body>
        <h3>Array $Marcas, usando comillas dobles</h3>
        <p>
            Notar: cada subelemento va encerrado entre llaves {} si uso comillas dobles, <br />
            para evitar concatenar con el punto y armar una sola linea de mensaje cada vez.
        </p>
        <?php 
        echo "El 1er elemento contiene como valor: <strong> {$Marcas[0]}  </strong>"; ?>
        <br />
        <?php
        echo "El 2do elemento contiene como valor: <strong> {$Marcas[1]} </strong>";
        ?>
        <br />
        <?php
        echo "El 3er elemento contiene como valor: <strong> {$Marcas[2]} </strong>";
        ?>
        <br />
        <?php
        echo "El 4to elemento contiene como valor: <strong> {$Marcas[3]} </strong>";
        ?>
        <br />
    </body>
</html>
