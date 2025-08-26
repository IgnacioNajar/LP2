<?php 
$Login='suepalacios';
$Clave='12345678';
$Provincia='CBA';
   
$ClaseEstilo='';
$Mensaje='';


if ($Login=='suepalacios'  && $Clave=='12345678') {
    $ClaseEstilo='MensajeOk';
    /*
     * este es un IF anidado: dentro de un IF puedo ir abriendo 
    tantas condiciones como necesite */
    if ($Provincia=='CBA') {
        //concateno mas informacion al mensaje de bienvenida
        $Mensaje.="Los usuarios de Cordoba tienen 10% de descuento en nuestros productos!";
    }else {
        $Mensaje.="Si usted no es de Cordoba, puede consultar por otros beneficios.";
    }
    
}else {
    $ClaseEstilo='MensajeError';
    $Mensaje='Los datos de acceso son incorrectos';
}

define('TITULO', 'C2_Ej4');
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
            <p class="<?php echo $ClaseEstilo; ?>">
                <?php echo $Mensaje; ?>
            </p>
        </div>
    </body>
</html>