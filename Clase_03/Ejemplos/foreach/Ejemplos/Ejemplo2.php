<?php
$Provincias['CORDOBA'] = "Cordoba Capital";
$Provincias['BUENOS_AIRES'] = "La Plata";
$Provincias['LA_RIOJA'] = "La Rioja";
$Provincias['CHUBUT'] = "Rawson";
$Provincias['TUCUMAN'] = "San Miguel de Tucuman";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" /> 
        <title> Arrays </title>
    </head>
    <body>
        <h3>Array $Provincias</h3>
        <?php
        /* traduccion:
        para cada subelemento del array de Provincias,
         * al referirnos al indice de cada elemento, lo voy a llamar $Indice
         * y el valor que tenga ese elemento pasa a ser $Valor
        */
        foreach ($Provincias as $Indice => $Valor) {
        //puedo usarlos dentro del bloque foreach para mostrar informacion
            echo "Mostrando la capital de $Indice: <b>$Valor</b>  <br />";
        }
        ?>
        <br />
    </body>
</html>