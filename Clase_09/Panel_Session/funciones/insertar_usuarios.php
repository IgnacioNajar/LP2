<?php
function InsertarUsuarios($vConexion) {
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    try {
        $nombre = strip_tags(trim($_POST['Nombre'] ?? ''));
        $apellido = strip_tags(trim($_POST['Apellido'] ?? ''));
        $email = strip_tags(trim($_POST['Email'] ?? ''));
        $clave = $_POST['Password'] ?? '';
        $pais = (int)($_POST['Pais'] ?? 0);
        $sexo = $_POST['Sexo'] ?? '';
        $nivel = 2; // Nivel por defecto

        $claveHash = password_hash($clave, PASSWORD_DEFAULT);

        $stmt = $vConexion->prepare(
            "INSERT INTO usuario (nombre, apellido, email, clave, nivelId, paisId, fechaCreacion, sexo)
            VALUES (?, ?, ?, ?, ?, ?, NOW(), ?)"
        );

        $stmt->bind_param("ssssiis", $nombre, $apellido, $email, $claveHash, $nivel, $pais, $sexo);

        $stmt->execute();
        $stmt->close();

        return true;

    } catch (mysqli_sql_exception $e) {
        error_log(date('Y-m-d H:i:s') . " - Error al insertar usuario: " . $e->getMessage() . "\n", 3, __DIR__ . '/../logs/db_errors.log');
        return false;
    }
}
?>
