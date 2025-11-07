<?php
function validarCamposRegistroTransporte($marca, $modelo, $anio, $patente)
{
  $mensaje = '';

  $marca = trim(strip_tags($marca ?? ''));
  $modelo = trim(strip_tags($modelo ?? ''));
  $anio = trim(strip_tags($anio ?? ''));
  $patente = trim(strip_tags($patente ?? ''));

  if (empty($marca)) {
    $mensaje .= 'Por favor seleccione una marca.<br>';
  }

  if (empty($modelo)) {
    $mensaje .= 'Por favor ingrese un modelo de transporte.<br>';
  }

  if (empty($anio)) {
    $mensaje .= 'Por favor ingrese el año del transporte.<br>';
  }

  if (empty($patente)) {
    $mensaje .= 'Por favor ingrese la patente del transporte.<br>';
  }

  return $mensaje;
}
?>
