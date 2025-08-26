<?php 
$Titulo='Estructuras Condicionales IF';
$Login='SuePalacios';
?>
<html>
    <head>
        <title><?php echo $Titulo; ?></title>
    </head>
    <body>
        <h3><?php echo $Titulo; ?></h3>
        <?php
        if ($Login=='SuePalacios'){ ?>
            <p style="color: #007997;">    
                Bienvenida <strong>Sue</strong>
            </p>
        <?php 
        }else { ?>
            <p style="color: #ff0000" >
                Usuario incorrecto
            </p>
        <?php 
        }
        ?>
    </body>
</html>

