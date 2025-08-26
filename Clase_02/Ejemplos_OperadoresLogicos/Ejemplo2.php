<?php
$Login='suepalacios';
$CodigoProvincia = 'CBA';  

$Mensaje = '';
//Si el Login es suepalacios o el codigo es de Cba, 
//pasara por el proceso A
if ($Login == 'suepalacios' || $CodigoProvincia == 'CBA') {
    //Proceso A
    $Mensaje = 'Bienvenida al panel!';
} else {
    //Proceso B
    $Mensaje = 'Los datos de acceso son incorrectos';
}

define('TITULO', 'C2_Ej2');
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

