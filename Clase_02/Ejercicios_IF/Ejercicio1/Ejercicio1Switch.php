<?php
$temperatura = 30;
define('TITULO', 'Clase 02 Ej 1 con IF');
?>

<!DOCTYPE html>
<html lang=es>
    <head>
        <title><?= TITULO; ?></title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            switch ($temperatura) {
                case 20:
                    echo '<img src="images/menos_calor.JPG">';
                    echo '<p>La temperatura es de <strong>20 grados</strong></p>';
                    echo '<hr style="height: 1px; width: 30em; background-color: gray; border: none; margin-left: 0; margin-right: auto">';
                    break;

                case 30:
                    echo '<img src="images/calor.JPG">';
                    echo '<p>La temperatura es de <strong>30 grados</strong></p>';
                    echo '<hr style="height: 1px; width: 30em; background-color: gray; border: none; margin-left: 0; margin-right: auto">';
                    break;

                case 40:
                    echo '<img src="images/mucho_calor.JPG">';
                    echo '<p>La temperatura es de <strong>40 grados</strong></p>';
                    echo '<hr style="height: 1px; width: 30em; background-color: gray; border: none; margin-left: 0; margin-right: auto">';
                    break;

                default:
                    echo '<p>La temperatura <strong>es incorrecta</strong></p>';
                    echo '<hr style="height: 1px; width: 30em; background-color: gray; border: none; margin-left: 0; margin-right: auto">';
            }
            ?>
    </body>
</html>
