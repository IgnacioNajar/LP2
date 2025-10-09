<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'panel';

// Activar que mysqli lance excepciones
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $conexionBd = mysqli_connect($host, $user, $password, $database);
    echo '<h3>Acceso al MySQL del localhost: La conexion es correcta!</h3>';

    $niveles = ['Invitado', 'Supervisor', 'Editor', 'Auditor'];

    try {
        foreach ($niveles as $indice => $nivel) {
            $sqlInsert = "INSERT INTO nivel(denominacion) VALUES ('$nivel')";
            mysqli_query($conexionBd, $sqlInsert);
            echo "<h3>✔ Nivel: $nivel insertado correctamente.</h3>";
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
