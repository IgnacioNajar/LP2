<?php
$Login = 'suepalacios';
$Clave = '12345678';
$Mensaje = '';

if ($Login == 'suepalacios' && $Clave == '12345678') {
    //Proceso A
    $Mensaje = 'Bienvenida al panel!';
} else {
    //Proceso B
    $Mensaje = 'Los datos de acceso son incorrectos';
}
define('TITULO', 'Clase 2 Ej 1');
?>
<html>
    <head>
        <title><?php echo TITULO; ?></title>
        <meta http-equiv="Content-Type" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <h2>
                <?php echo $Mensaje; ?>
            </h2>
        </div>
    </body>
</html>
