<?php
$Marcas[0] = "Adidas";
$Marcas[1] = "Nike";
$Marcas[2] = "Topper";
$Marcas[3] = "Reebok";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html"  /> 
        <title> Arrays </title>
    </head>
    <body>
        <h3>Array $Marcas</h3>
        <?php
        /* debo conocer cuantos elementos tiene el array:
         * Para esto uso la funcion count()
         * esta funcion devuelve la cantidad de elementos que tiene el array
         */
        $cantidadSubElementos = count($Marcas);
        ?>
        <h3>Recorriendo array con For: </h3>

        <?php
        for ($i = 0; $i < $cantidadSubElementos; $i++) {
            echo 'El elemento ' . $i . ' del array contiene <b>' . $Marcas[$i] . '</b><br />';
            //es lo mismo hacer asi:
            //echo "El elemento $i del array contiene {$Marcas[$i]} <br />";
        }
        ?>
    </body>
</html>

