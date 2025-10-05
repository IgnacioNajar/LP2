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
    //quiero traer un listado de los PAISES cargados
    //1) genero la consulta que deseo
    $SQL = "SELECT Id, Denominacion  FROM paises ORDER BY 1";
    
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
                <hr />
                ";
    }
}
?>
<br />
