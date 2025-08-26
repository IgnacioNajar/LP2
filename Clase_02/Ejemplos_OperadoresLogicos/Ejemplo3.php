<?php 
$Login='suepalacios'; //Modifiquen este valor para ver el comportamiento
$Clave='12345678'; //Modifiquen tambien este valor para ver el comportamiento

//estas variables tomaran valores dependiendo si login y clave son correctos
$ClaseEstilo='';
$Mensaje='';    

if ($Login=='suepalacios'  && $Clave=='12345678') {
    $ClaseEstilo='MensajeOk';
    $Mensaje='Bienvenida al panel!';
    
}else {
    $ClaseEstilo='MensajeError';
    $Mensaje='Los datos de acceso son incorrectos';
}
//esta es una constante q la usare en el titulo de mi pagina
define('TITULO', 'C2_Ej3');
?>
<html>
    <head>
        <title><?php echo TITULO; ?></title>
        <meta http-equiv="Content-Type" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .MensajeOk {
                color: #187c12;
            }
            .MensajeError {
                color: #f00;
            }
        </style>
    </head>
    <body>
        <div>
            <?php //aqui solamente muestro los valores de las variables, ya procesadas arriba ?>
            <p class='<?php echo $ClaseEstilo; ?>'>
                <?php echo $Mensaje; ?>
            </p>
        </div>
    </body>
</html>