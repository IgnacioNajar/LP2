<?php
function validarCamposRegistroTransporte($marca, $modelo, $anio, $patente)
{
  $mensaje = '';

  $marca = trim(strip_tags($marca ?? ''));
  $modelo = trim(strip_tags($modelo ?? ''));
  $anio = trim(strip_tags($anio ?? ''));
  $patente = trim(strip_tags($patente ?? ''));

  if (empty($marca)) {
    $mensaje .= 'Por favor seleccioná una marca.<br>';
  }

  if (empty($modelo)) {
    $mensaje .= 'Por favor ingresá un modelo de transporte.<br>';
  }

  if (empty($anio)) {
    $mensaje .= 'Por favor ingresá el año del transporte.<br>';
  }

  if (empty($patente)) {
    $mensaje .= 'Por favor ingresá la patente del transporte.<br>';
  }

  return $mensaje;
}
?>
