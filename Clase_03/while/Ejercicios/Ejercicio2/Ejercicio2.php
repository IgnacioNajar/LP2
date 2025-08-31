<!DOCTYPE html>
<html lang=es>
    <head>
        <title>While: ejercicio 2</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        $i = 1;
        while ($i <= 12) { ?>
            <img src="<?= "images/$i.JPG"; ?>"
            alt="Imagen del mes nro <?= $i; ?>"
            title="Este es el mes nro<?= $i; ?>">
            <br/>
            <?php
            $i++;
        }
        ?>
        <hr/>
    </body>
</html>
