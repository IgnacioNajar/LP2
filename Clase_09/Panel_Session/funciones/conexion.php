<?php
function ConexionBD($Host = 'db', $User = 'nacho', $Password = '1234', $BaseDeDatos = 'panel') {
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    try {
        $linkConexion = mysqli_connect($Host, $User, $Password, $BaseDeDatos);
        $linkConexion->set_charset('utf8mb4');
        return $linkConexion;

    } catch (mysqli_sql_exception $e) {
        error_log(date('Y-m-d H:i:s') . " - Error DB: " . $e->getMessage() . "\n", 3, __DIR__ . '/../logs/db_errors.log');

        return null;
    }
}
?>
