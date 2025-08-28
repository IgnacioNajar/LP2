<?php
define('TITULO','Clase 2 Ej 3');
$mes = 13;
?>

<html lang="es">
    <head>
        <title><?= TITULO; ?></title>
        <meta charset="utf-8">
        <style>
            hr {
                height: 1px;
                width: 224px;
                background-color: gray;
                border: none;
                margin-left: 5px;
                margin-right: auto;
            }
        </style>
    </head>
    <body>
        <?php
        switch ($mes) {
            case 1:
                echo '<img src="images/Ene.JPG" alt="Imagen del mes de enero" title="Imagen del mes de enero">';
                echo '<hr>';
                break;
            case 2:
                echo '<img src="images/Feb.JPG" alt="Imagen del mes de febrero" title="Imagen del mes de febrero">';
                echo '<hr>';
                break;
            case 3:
                echo '<img src="images/Mar.JPG" alt="Imagen del mes de marzo" title="Imagen del mes de marzo">';
                echo '<hr>';
                break;
            case 4:
                echo '<img src="images/Abr.JPG" alt="Imagen del mes de abril" title="Imagen del mes de abril">';
                echo '<hr>';
                break;
            case 5:
                echo '<img src="images/May.JPG" alt="Imagen del mes de mayo" title="Imagen del mes de mayo">';
                echo '<hr>';
                break;
            case 6:
                echo '<img src="images/Jun.JPG" alt="Imagen del mes de junio" title="Imagen del mes de junio">';
                echo '<hr>';
                break;
            case 7:
                echo '<img src="images/7.JPG" alt="Imagen del mes de julio" title="Imagen del mes de julio">';
                echo '<hr>';
                break;
            case 8:
                echo '<img src="images/8.JPG" alt="Imagen del mes de agosto" title="Imagen del mes de agosto">';
                echo '<hr>';
                break;
            case 9:
                echo '<img src="images/9.JPG" alt="Imagen del mes de septiembre" title="Imagen del mes de septiembre">';
                echo '<hr>';
                break;
            case 10:
                echo '<img src="images/10.JPG" alt="Imagen del mes de octubre" title="Imagen del mes de octubre">';
                echo '<hr>';
                break;
            case 11:
                echo '<img src="images/11.JPG" alt="Imagen del mes de noviembre" title="Imagen del mes de noviembre">';
                echo '<hr>';
                break;
            case 12:
                echo '<img src="images/12.JPG" alt="Imagen del mes de diciembre" title="Imagen del mes de diciembre">';
                echo '<hr>';
                break;
            default:
                echo '<p>El mes ingresado es <strong>incorrecto</strong></p>';
                break;
        } ?>
    </body>
</html>
