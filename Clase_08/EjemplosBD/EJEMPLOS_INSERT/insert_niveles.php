<?php
$Host = 'localhost';
$User = 'root';
$Password = '';
$BaseDeDatos = 'panel';


//procedo al intento de conexion con esos parametros
$linkConexion = mysqli_connect($Host, $User, $Password, $BaseDeDatos);

if ($linkConexion != false) {
    //si la conexion es correcta... 
    echo '<h2>Acceso al Mysql del Localhost... ok</h3>';
    
    //en la variable $SQL_Insert asigno la CONSULTA de INSERCION con el valor a agregar:
    $SQL_Insert = "INSERT INTO niveles (Denominacion) VALUES ('Nivel -----' )";
    
    //procedo a ejecutar la consulta
    if (!mysqli_query($linkConexion, $SQL_Insert)) {
        //si surge un error, finalizo la ejecucion del script con un mensaje
        die('<h4>Error al intentar insertar el Nivel.</h4>');
    }
    echo "<h4>El Nivel se ha insertado correctamente!</h4>";
}


?>
