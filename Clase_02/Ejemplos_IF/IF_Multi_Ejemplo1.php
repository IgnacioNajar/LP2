<?php 
$Titulo='Condicionales';   
?>
<html>
    <head>
        <title><?php echo $Titulo; ?></title>
    </head>
    <body>
        <?php
        $var=20;  //asigno el valor 20 a la $var. 
        //Probar con valores 30, 40, 100 y otros...
        
        if ($var==20){ //si $var vale 20??
            //muestro este mensaje
            echo "<p style='color: #ff0000;' >La variable vale <b>20</b> </p>.";
            
        } else if ($var==30) {  //si $var no vale 20 y vale 30?
            echo "<p style='color: #007997;' >La variable vale <b>30</b></p>.";
            
        } else if ($var==40) {  //si $var no vale 20 ni 40 y vale 40?            
            echo "<p style='color: #662e6f;' >La variable vale <b>40</b></p>.";
            
        }else {  //si la $var no vale ninguno de los anteriores
            echo "<p style='color: #b32e36;' >La variable vale <b>$var</b></p>.";
        }
        ?>
    </body>
</html>


