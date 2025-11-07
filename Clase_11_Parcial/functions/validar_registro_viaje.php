<?php
function validarCamposRegistroViaje($chofer, $transporte, $fecha, $destino, $costo, $porcentajeChofer)
{
  $mensaje = '';

  $chofer = trim(strip_tags($chofer ?? ''));
  $transporte = trim(strip_tags($transporte ?? ''));
  $fecha = trim(strip_tags($fecha ?? ''));
  $destino = trim(strip_tags($destino ?? ''));
  $costo = trim($costo ?? '');
  $porcentajeChofer = trim($porcentajeChofer ?? '');

  if (empty($chofer)) {
    $mensaje .= 'Por favor seleccione un chofer.<br>';
  }

  if (empty($transporte)) {
    $mensaje .= 'Por favor seleccione un transporte.<br>';
  }

  if (empty($fecha)) {
    $mensaje .= 'Por favor ingrese la fecha programada.<br>';
  } else {
    $fechaValida = DateTime::createFromFormat('Y-m-d', $fecha);
    $erroresFecha = DateTime::getLastErrors();
    
    if (!$fechaValida || !empty($erroresFecha['warning_count']) || !empty($erroresFecha['error_count'])) {
      $mensaje .= 'La fecha ingresada no tiene un formato válido (AAAA-MM-DD).<br>';
    }
  }

  if (empty($destino)) {
    $mensaje .= 'Por favor seleccione un destino.<br>';
  }

  if (empty($costo)) {
    $mensaje .= 'Por favor ingrese el costo del viaje.<br>';
  }

  if (empty($porcentajeChofer)) {
    $mensaje .= 'Por favor ingrese el porcentaje del chofer.<br>';
  }

  return $mensaje;
}
?>
