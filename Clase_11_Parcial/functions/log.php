<?php
function registrarLog($mensaje, $tipo = 'INFO', $archivo = 'db.log') {
    $logDir = __DIR__ . '/../logs/';

    if (!is_dir($logDir)) {
        mkdir($logDir, 0777, true);
    }

    $fecha = date('d/m/Y H:i:s');
    $cadena = "[$fecha] [$tipo] $mensaje\n";

    $archivo = $tipo === 'ERROR' ? 'db_errors.log' : 'db_success.log';

    error_log($cadena, 3, $logDir . $archivo);
}
?>
