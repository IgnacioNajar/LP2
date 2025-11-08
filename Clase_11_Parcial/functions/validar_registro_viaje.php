<?php
function validarCamposRegistroViaje($chofer, $transporte, $fecha, $destino, $costo, $porcentajeChofer)
{
    $mensaje = '';

    //Limpieza de los datos que vienen por parametro y asignaciones a variables
    $chofer = trim(strip_tags($chofer ?? ''));
    $transporte = trim(strip_tags($transporte ?? ''));
    $fecha = trim(strip_tags($fecha ?? ''));
    $destino = trim(strip_tags($destino ?? ''));
    $costo = trim($costo ?? '');
    $porcentajeChofer = trim($porcentajeChofer ?? '');

    //Validaciones para el campo del chofer
    if (empty($chofer)) {
        $mensaje .= 'Por favor seleccione un chofer.<br>';
    }

    //Validaciones para el campo del transporte
    if (empty($transporte)) {
        $mensaje .= 'Por favor seleccione un transporte.<br>';
    }

    //Validaciones para el campo de la fecha
    if (empty($fecha)) {
        $mensaje .= 'Por favor ingrese la fecha programada.<br>';
    } else {
        $fechaValida = DateTime::createFromFormat('Y-m-d', $fecha);
        $erroresFecha = DateTime::getLastErrors();

        if (!$fechaValida || !empty($erroresFecha['warning_count']) || !empty($erroresFecha['error_count'])) {
            $mensaje .= 'La fecha ingresada no tiene un formato válido (AAAA-MM-DD).<br>';
        }
    }

    //Validaciones para el campo del destino
    if (empty($destino)) {
        $mensaje .= 'Por favor seleccione un destino.<br>';
    }

    //Validaciones para el campo del costo
    if (empty($costo)) {
        $mensaje .= 'Por favor ingrese el costo del viaje.<br>';
    } elseif (!is_numeric($costo)) {
        $mensaje .= 'El costo debe ser un número.<br>';
    } elseif ($costo < 0) {
        $mensaje .= 'El costo del viaje debe ser mayor a 0.<br>';
    }

    //Validaciones para el campo del porcentaje
    if (empty($porcentajeChofer)) {
        $mensaje .= 'Por favor ingrese el porcentaje del chofer.<br>';
    } elseif (!is_numeric($porcentajeChofer)) {
        $mensaje .= 'El porcentaje debe ser un número.<br>';
    } elseif ($porcentajeChofer < 0 || $porcentajeChofer > 100) {
        $mensaje .= 'El porcentaje debe estar entre 0 y 100.<br>';
    }

    return $mensaje;
}
?>
