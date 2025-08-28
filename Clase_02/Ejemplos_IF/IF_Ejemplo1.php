<?php
$Titulo='Condicionales';
?>
<html>
    <head>
        <title><?php echo $Titulo; ?></title>
    </head>
    <body>
        <?php
        $var=10;  //asigno el valor 10 a la $var
        if ($var==10)  { //si $var vale 10??
            //muestro este mensaje
            echo "La variable vale <b>10</b>.";

        }else {  //si la $var no vale 10
            //muestro este otro mensaje
            echo "La variable <b>NO</b> vale 10.";
        }
        ?>
    </body>
</html>
