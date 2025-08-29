<?php
$Colores[0]="Rojo";
$Colores[1]="Azul";
$Colores[2]="Negro";
$Colores[3]="Verde";
    
//el tercer elemento ya contiene un valor: Negro
$Colores[2]="Violeta";  //si asigno un valor a uno que ya tenia, lo piso! 
    
//el primer elemento ya contiene un valor: Rojo
$Colores[0]="Naranja";  //si asigno un valor a uno que ya tenia, lo piso! 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html"  /> 
        <title> Arrays </title>
    </head>
    <body>
        <h3>Array $Colores</h3>
        <?php echo 'El 1er elemento contiene como valor: <strong>' . $Colores[0] . '</strong> '; ?>
        <br />
        <?php
        echo 'El 2do elemento contiene como valor: <strong>' . $Colores[1] . '</strong> ';
        ?>
        <br />
        <?php
        echo 'El 3er elemento contiene como valor: <strong>' . $Colores[2] . '</strong> ';
        ?>
        <br />
        <?php
        echo 'El 4to elemento contiene como valor: <strong>' . $Colores[3] . '</strong> ';
        ?>
        <br />
       
    </body>
</html>
