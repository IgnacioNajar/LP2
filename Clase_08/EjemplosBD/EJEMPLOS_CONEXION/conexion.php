<?php
$Host = 'db';
$User = 'nacho';
$Password = '1234';
$BaseDeDatos='panel';

try {
    $linkConexion = mysqli_connect($Host, $User, $Password, $BaseDeDatos);

    echo '<h3>Acceso al MySQL del localhost: La conexión es correcta!</h3>';

} catch (mysqli_sql_exception $e) {
    echo '<h3>Hubo algún error al intentar conectarse...</h3>';
    echo '<p>Error: ' . $e->getMessage() . '</p>';
}
?>
