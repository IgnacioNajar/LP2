<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" /> 
        <title> Ejemplo For con array de Dias</title>
    </head>
    <body>
        <?php
        /*Generar un array con los Dias:
     el indice es el nro de dia.
     el valor es el nombre del dia.
     Recorrer con un for y mostrar nro de dia y su valor. */
        $Dias[1]='Lunes';
        $Dias[2]='Martes';
        $Dias[3]='Miercoles';
        $Dias[4]='Jueves';
        $Dias[5]='Viernes';
        $Dias[6]='Sabado';
        $Dias[7]='Domingo';

        $CantidadDias=count($Dias);
        for ($i = 1; $i <= $CantidadDias; $i++) { 
            echo "el dia $i es {$Dias[$i]}";
            echo '<br />';
                         
        }
        ?>
        <hr />
    </body>
</html>
