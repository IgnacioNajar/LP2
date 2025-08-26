<?php 
/*
Dada una variable llamada Temperatura, asignar un valor: 25, 30 o 40.
 * Segun el numero asignado, debera mostrar la imagen correspondiente
 * siguiendo estas condiciones:
 * 
 * Si la temperatura es de 25 grados, mostrar la imagen menos_calor.jpg
 * si la termperatura es 30 grados, mostrar la imagen calor.jpg
 * si la temperatura es de 40 grados, mostrar la imagen mucho_calor.jpg
 * con los mensajes correspondientes.
 *  * si no es ninguno de esos 3 valores, mostrar el mensaje de error.
Hacer dos scripts, uno con IF y otro con Switch.
 *  */
$Titulo="Clase 02 Ej 1";
?>
<html>
    <head>
        <title><?php echo $Titulo; ?></title>
    </head>
    <body>
        <img src='images/menos_calor.jpg' /> <br />
        La temperatura es de <strong>25 grados</strong> 
        <hr />
        
        <img src='images/calor.jpg' /> <br />
        La temperatura es de <strong>30 grados</strong> 
        <hr />
        
        <img src='images/mucho_calor.jpg' /> <br />
        La temperatura es de <strong>40 grados</strong> 
        <hr />
        
        La temperatura de <strong> es incorrecta</strong> 
        <hr />
        
    </body>
</html>


