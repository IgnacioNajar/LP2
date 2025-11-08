<?php
include_once('log.php');
require_once('select_chofer.php');
require_once('select_transporte.php');
require_once('select_destino.php');

function insertarViaje($vConexion, $choferDNI, $transporte, $fecha, $destino, $costoViaje, $porcentajeChofer)
{
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    date_default_timezone_set('America/Argentina/Buenos_Aires');

    $vConexion->query("SET time_zone = '-3:00'");

    $choferes = listarChoferes($vConexion);

    foreach ($choferes as $elemento) {
        if ($choferDNI == $elemento['dni']) {
            $choferId = $elemento['id'];
            break;
        }
    }

    $transportes = listarTransportes($vConexion);

    foreach ($transportes as $elemento) {
        if ($transporte == $elemento['patente']) {
            $transporteId = $elemento['id'];
            break;
        }
    }

    $destinos = listarDestinos($vConexion);

    foreach ($destinos as $elemento) {
        if ($destino == $elemento['denominacion']) {
            $destinoId = $elemento['id'];
            break;
        }
    }

    $fecha = date('Y-m-d', strtotime($fecha));

    $montoChofer = $costoViaje * ($porcentajeChofer / 100);

    try {
        $stmt = $vConexion->prepare(
            "INSERT INTO viaje (choferId, transporteId, fecha, destinoId, costoViaje, montoChofer, porcentaje)
            VALUES (?, ?, ?, ?, ?, ?, ?)"
        );
        $stmt->bind_param("iisiddd", $choferId, $transporteId, $fecha, $destinoId, $costoViaje, $montoChofer, $porcentajeChofer);
        $stmt->execute();

        registrarLog("Viaje insertado correctamente: $choferId, $transporteId, $fecha, $destinoId, $costoViaje, $montoChofer, $porcentajeChofer", 'INFO');

        $stmt->close();
        return true;
    } catch (mysqli_sql_exception $e) {
        registrarLog("Intento de insertar viaje fallido" . $e->getMessage(), 'ERROR');
        return false;
    }
}
?>
