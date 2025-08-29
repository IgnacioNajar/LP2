<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" /> 
        <title> Ejemplo For</title>
    </head>
    <body>
        <?php
        for ($i = 1; $i <= 12; $i++) {
            ?>
            <img src="images/<?php echo $i; ?>.JPG" title="este es el mes nro <?php echo $i; ?>" />
            <br />
            <?php
        }
        ?>
        <hr />
    </body>
</html>
