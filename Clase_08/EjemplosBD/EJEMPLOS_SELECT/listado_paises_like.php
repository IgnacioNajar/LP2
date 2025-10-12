<?php
$Listado = array();

// Variables de conexión
$Host = 'db';
$User = 'nacho';
$Password = '1234';
$BaseDeDatos = 'panel';

// Activar que mysqli lance excepciones
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {

    // Intento de conexión
    $linkConexion = mysqli_connect($Host, $User, $Password, $BaseDeDatos);
    echo '<h3>Conexión correcta a la base de datos</h3>';

    // Consulta de países
    $SQL = "SELECT * FROM pais WHERE nombre LIKE 'A%'";
    $rs = mysqli_query($linkConexion, $SQL);

    while ($fila = mysqli_fetch_assoc($rs)) {
        $Listado[] = $fila;
    }

    // Mostrar listado
    if (!empty($Listado)) {
        echo '<h3>Listado de países filtrados por la letra A</h3>';
        foreach ($Listado as $indice => $pais) {
            echo "El elemento $indice de mi listado contiene: <br/>
                El ID --> {$pais['id']} <br/>
                Nombre --> {$pais['nombre']} <br/>
                <hr />";
        }
    } else {
        echo '<h3>No hay niveles cargados en la base de datos.</h3>';
    }

} catch (mysqli_sql_exception $e) {
    echo '<h3>Error en la base de datos</h3>';
    echo '<p>' . $e->getMessage() . '</p>';
}
?>
