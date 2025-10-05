<?php
//este sera el listado de registros traidos de la base de datos
$Listado = array();

//datos de conexion
$Host = 'localhost';
$User = 'root';
$Password = '';
$BaseDeDatos = 'panel';

//me conecto
$linkConexion = mysqli_connect($Host, $User, $Password, $BaseDeDatos);

/*****************************************************/
//aqui preguntamos si viene el codigo por URL
//si viene, procedemos a la eliminacion de ese codigo
if (!empty($_GET['codigo'])) {   
    //si conecto ok, procedo:
    if ($linkConexion != false) {
        //armo la consulta para eliminar de Paises el registro con ID del codigo
        $SQL_Delete='DELETE FROM paises WHERE Id = '.$_GET['codigo'];
        //envio la consulta a la conexion
        if (!mysqli_query($linkConexion, $SQL_Delete)) {
            die ('No se pudo eliminar');
        }else {
            echo "$SQL_Delete : Se ha borrado el codigo {$_GET['codigo']} - <br />";
        }
    }
}
/*****************************************************/
//armo el listado de paises
$SQL = "SELECT * FROM paises  ORDER BY 2";
//2) a la conexion actual le brindo mi consulta, y el resultado lo entrego a variable $rs
$rs = mysqli_query($linkConexion, $SQL);
            
/*3) el resultado deberá organizarse en una matriz, entonces lo recorro
            mientras haya resultados, voy tomando cada dato del resultado en el array $data
            cada elemento se corresponde a un campo de mi consulta
            estructuro mi propio array $Listado */
$i=0;
while ($data = mysqli_fetch_array($rs)) {
    $Listado[$i]['ID'] = $data['Id'];
    $Listado[$i]['NOMBRE'] = $data['Denominacion'];
    $i++;
}

/*****************************************************/
//si $Listado contiene valores, ya dispongo de los datos para mostrar 
if (!empty($Listado)) {
    echo '<h3>Listado de Paises</h3>';
    $cantidadRegistros = count($Listado);
    for ($i = 0; $i < $cantidadRegistros; $i++) {  ?>
        ID: <?php  echo "{$Listado[$i]['ID']}"; ?>  |  
        NOMBRE:  <?php  echo "{$Listado[$i]['NOMBRE']}"; ?>  | 
        <a href='delete_paises.php?codigo=<?php echo $Listado[$i]['ID'] ?>'
         onclick="if (confirm('Esta seguro de eliminar este pais?')) { return true; } else {return false; }" >
         Eliminar </a> 
        <br />
    <?php
    }
}
?>
<br />

