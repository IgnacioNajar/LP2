<?php
//este sera el listado de registros traidos de la base de datos
$Listado = array();
//variables de conexion
$Host = 'localhost';
$User = 'root';
$Password = '';
$BaseDeDatos = 'panel';

//procedo al intento de conexion con esos parametros
$linkConexion = mysqli_connect($Host, $User, $Password, $BaseDeDatos);

if ($linkConexion != false) {

    //a los fines del ejemplo, vamos a "limpiar" de datos la tabla, para generar de nuevo:
    //esta sentencia limpia de valores la tabla especificada y vuelve el autoincremental a 1
    $SQL_Limpieza='TRUNCATE TABLE paises';
    
    if (!mysqli_query($linkConexion, $SQL_Limpieza)) {
        //si surge un error, finalizo la ejecucion del script con un mensaje
        die("<h4>Error al intentar limpiar la tabla de Paises .</h4>");
    }else {
        echo '** Se ha limpiado la tabla de Paises ** <br />';
    }

    //vamos a generar un insert de varios paises en base a este array, para no cargar de a uno
    $Paises = array( 'Argentina' , 'Chile' , 'Brasil' , 'Uruguay' , 'EEUU','Colombia' );
    //, 'Venezuela' , 'Nicaragua' , 'Honduras', 'Bolivia');

    //recorremos el array con un foreach para ir tomando sus valores
    foreach($Paises as $Nombre) {
        //genero la variable de la consulta con el Insert de cada pais
        $SQL_Insert = "INSERT INTO paises (Denominacion) VALUES ('$Nombre')" ;
        //envio la consulta a la conexion establecida
        if (!mysqli_query($linkConexion, $SQL_Insert)) {
            //si surge un error, finalizo la ejecucion del script con un mensaje
            die("<h4>Error al intentar insertar el registro de Pais: $Nombre .</h4>");
        }else {
            echo "Se agrega el Pais *$Nombre* <br />";
        }
    }

    //si no hubo errores aqui ya se insertaron los valores en la base
    //vamos a consultar los paises nuevamente
    $SQL = "SELECT * FROM paises";
    
    //2) a la conexion actual le brindo mi consulta, y el resultado lo entrego a variable $rs
    $rs = mysqli_query($linkConexion, $SQL);
    
    //3) el resultado deberá organizarse en una matriz, entonces lo recorro
    //mientras haya resultados, voy tomando cada dato del resultado en el array $data
    //cada elemento se corresponde a un campo de mi consulta
    //estructuro mi propio array $Listado 
    $i=0;
    while ($data = mysqli_fetch_array($rs)) {
        $Listado[$i]['ID'] = $data['Id'];
        $Listado[$i]['NOMBRE'] = $data['Denominacion'];
        $i++;
    }
 
}

//si $Listado contiene valores, ya dispongo de los datos
if (!empty($Listado)) {
    echo '<h3>Listado de Paises</h3>';
    $cantidadRegistros = count($Listado);
    for ($i = 0; $i < $cantidadRegistros; $i++) {
        echo "El elemento $i de mi listado contiene: <br />
                El ID --> {$Listado[$i]['ID']} <br />
                Nombre --> {$Listado[$i]['NOMBRE']} <br />
                <hr />";
        
    }
}
?>
<br />
