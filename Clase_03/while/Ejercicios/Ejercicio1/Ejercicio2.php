<?php
$idioma = 'EN';

if ($idioma == 'ES') {
    $ruta_img = 'images/';
} else {
    $ruta_img = 'img_ingles/';
}
?>

<!DOCTYPE html>
<html lang="<?= strtolower($idioma); ?>">
    <head>
        <meta charset="UTF-8" />
        <title> Ejercicio 2</title>
        <style>
            ul {
                list-style-type: none;
                padding-left: 0;
            }
        </style>
    </head>
    <body>
        <h3>
            Usar una variable que defina el idioma.  <br / >
            Darle el valor de cadena "EN" , o "ES" (Define si vemos los meses en Ingles o Español).
        </h3>
        <h3> Si vale "EN", mostrar con PHP el listado de meses en ingles, usando la carpeta de recursos /img_ingles</h3>
        <h3> Si vale "ES", mostrar con PHP el listado de meses en español, usando la carpeta de recursos /images</h3>
        <hr />

        <ul>
            <?php
                $i = 1;

                while ($i <= 12) { ?>
                    <li>
                        <img src="<?= $ruta_img.$i.'.JPG'; ?>"
                        title="Mes nro <?= $i; ?>"
                        alt="Imagen del mes nro <?= $i; ?>">
                    </li>

                    <?php
                    $i++;
                } ?>
        </ul>
    </body>
</html>
