<?php
//para el mysql instalado con Wamp, estos son los datos de conexio
$Host = 'localhost';  //127.0.0.1
$User = 'root';
$Password = '';
$BaseDeDatos='panel';  

//procedo al intento de conexion con esos parametros
$linkConexion = mysqli_connect($Host, $User, $Password, $BaseDeDatos);
if ($linkConexion!=false) {
    echo '<h3>Acceso al Mysql del Localhost: La conexion es correcta!</h3>';
}else {
    echo '<h3>Hubo algun error al intentar conectarse...</h3>';
}
?>
