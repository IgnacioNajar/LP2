<?php
function obtenerEstadoViaje($fechaViaje)
{
    date_default_timezone_set('America/Argentina/Buenos_Aires');

    $fechaViaje = date("Y-m-d", strtotime($fechaViaje));
    $fechaActual = date("Y-m-d");
    $fechaManiana = date("Y-m-d", strtotime("+1 day"));

    if ($fechaViaje === $fechaActual) {
        $estado = 'danger';
        $mensaje = 'Viaje programado para hoy';
    } elseif ($fechaViaje === $fechaManiana) {
        $estado = 'warning';
        $mensaje = 'Viaje programado para mañana';
    } elseif ($fechaViaje < $fechaActual) {
        $estado = 'success';
        $mensaje = 'Viaje realizado';
    } else {
        $estado = 'primary';
        $mensaje = 'Viaje programado';
    }

    return [
        'estado' => $estado,
        'mensaje' => $mensaje
    ];
}
?>
