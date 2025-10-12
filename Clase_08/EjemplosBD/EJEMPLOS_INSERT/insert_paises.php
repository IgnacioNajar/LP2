<?php
$host = 'db';
$user = 'nacho';
$password = '1234';
$database = 'panel';

// Activar que mysqli lance excepciones
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $conexionBd = mysqli_connect($host, $user, $password, $database);
    echo '<h3>Acceso al MySQL del localhost: La conexion es correcta!</h3>';

    $paises = ['Alemania', 'Angola', 'Afghanistan'];

    try {

        foreach ($paises as $indice => $pais) {
            $sqlInsert = "INSERT INTO pais(nombre) VALUES ('$pais')";
            mysqli_query($conexionBd, $sqlInsert);
            echo "<h3>✔ País: $pais insertado correctamente.</h3>";
        }

    } catch (mysqli_sql_exception $e) {
        echo '<h3>Error al insertar</h3>';
        echo '<p>'. $e->getMessage() .'</p>';
    }

} catch (mysqli_sql_exception $e) {
    echo '<h3>Error de conexión</h3>';
    echo '<p>'. $e->getMessage() . '</p>';
    exit;
}
?>
