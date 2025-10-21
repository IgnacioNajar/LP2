<?php
function InsertarNivel($vConexion) {
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    try {
        // Tomamos y limpiamos el valor del formulario
        $nombre = isset($_POST['Nombre']) ? trim(strip_tags($_POST['Nombre'])) : '';

        // Validación simple
        if (empty($nombre)) {
            return ['success' => false, 'mensaje' => 'El nombre del país no puede estar vacío.'];
        }

        // Verificar si ya existe el nivel
        $check = $vConexion->prepare("SELECT id FROM nivel WHERE denominacion = ?");
        $check->bind_param("s", $nombre);
        $check->execute();
        $check->store_result();
        if ($check->num_rows > 0) {
            $check->close();
            return ['success' => false, 'mensaje' => 'El nivel ya existe en la base de datos.'];
        }
        $check->close();

        // Preparar la consulta de inserción
        $stmt = $vConexion->prepare("INSERT INTO nivel (denominacion) VALUES (?)");
        $stmt->bind_param("s", $nombre);
        $stmt->execute();
        $stmt->close();

        return ['success' => true, 'mensaje' => 'Nivel registrado correctamente.'];

    } catch (mysqli_sql_exception $e) {
        // Guardar error en log
        error_log(date('Y-m-d H:i:s') . " - Error al insertar nivel: " . $e->getMessage() . "\n", 3, __DIR__ . '/../logs/db_errors.log');
        return ['success' => false, 'mensaje' => 'Ocurrió un error al registrar el nivel.'];
    }
}
?>
