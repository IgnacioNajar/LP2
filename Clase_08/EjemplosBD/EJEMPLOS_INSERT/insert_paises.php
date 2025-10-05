<?php
//Datos de conexion a la BD
$Host = 'localhost';
$User = 'root';
$Password = '';
$BaseDeDatos = 'panel';

//procedo al intento de conexion con esos parametros
$linkConexion = mysqli_connect($Host, $User, $Password, $BaseDeDatos);

if ($linkConexion != false) {
    //si la conexion es correcta... 
    echo '<h2>Acceso al Mysql del Localhost... ok</h3>';
    
    /*********************************/
    //en la variable $SQL_Insert asigno la CONSULTA de INSERCION con el valor a agregar:
    $SQL_Insert="INSERT INTO paises (Denominacion) VALUES ('Uruguay')";
    
    //procedo a ejecutar la consulta con la conexion generada al principio
    if (!mysqli_query($linkConexion, $SQL_Insert)) {
        //si surge un error, finalizo la ejecucion del script con un mensaje
        die('<h4>Error al intentar insertar el registro de Pais: Uruguay.</h4>');
    }
    //si todo va bien muestro mensaje
    echo '<h4>Uruguay: Registro insertado correctamente.</h4>';

    /**********************************/
    //en la variable $SQL_Insert asigno la CONSULTA de INSERCION con el valor a agregar:
    $SQL_Insert="INSERT INTO paises (Denominacion) VALUES ('EEUU')";
    
    //procedo a ejecutar la consulta con la conexion generada al principio
    if (!mysqli_query($linkConexion, $SQL_Insert)) {
        //si surge un error, finalizo la ejecucion del script con un mensaje
        die('<h4>Error al intentar insertar el registro de Pais: EEUU.</h4>');
    }
    //si todo va bien muestro mensaje
    echo '<h4>EEUU: Registro insertado correctamente.</h4>';
}



?>