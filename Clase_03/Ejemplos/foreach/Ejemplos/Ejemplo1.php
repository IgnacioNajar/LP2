<?php
   $Provincias['CORDOBA']="Cordoba Capital";
   $Provincias['BUENOS_AIRES']="La Plata";
   $Provincias['LA_RIOJA']="La Rioja";
   $Provincias['CHUBUT']="Rawson";
   $Provincias['TUCUMAN']="San Miguel de Tucuman";
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
        //mostrando el subelemento dentro de comillas dobles
        echo "Mostrando la capital de CORDOBA: {$Provincias['CORDOBA']}"; ?>
        <br />
        <?php
        //mostrando el subelemento dentro de comillas dobles
        echo "Mostrando la capital de BUENOS_AIRES: {$Provincias['BUENOS_AIRES']}";
        ?>
        <br />
        <?php
        //mostrando el subelemento concatenandolo a un mensaje con comillas simples
        echo 'Mostrando la capital de LA_RIOJA: '.$Provincias['LA_RIOJA'];
        ?>
        <br />
        <?php 
        //mostrando el subelemento dentro del lugar especifico del HTML ?>
        Mostrando la capital de CHUBUT:  <?php echo $Provincias['CHUBUT']; ?>
        
        <br />
        <?php 
        //mostrando el subelemento dentro del lugar especifico del HTML ?>
        Mostrando la capital de TUCUMAN:  <?php echo $Provincias['TUCUMAN']; ?>
        
        <br />
    </body>
</html>
