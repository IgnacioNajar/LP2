<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" />
        <title> Ejercicio 1</title>
        <style>
            ul {
                list-style-type: none;
                padding-left: 0;
            }
        </style>
    </head>
    <body>
        <h3> Mostrar con PHP el listado de meses en ingles, usando la carpeta de recursos /img_ingles</h3>
        <hr/>
        <ul>
        <?php
        $i = 1;
        while ($i <= 12) {
            echo '<li>
                    <img src="img_ingles/'.$i.'.JPG" title="Mes'.$i.'" alt="Imagen del mes'.$i.'">
                </li>';
            $i++;
        } ?>
        </ul>
    </body>
</html>
