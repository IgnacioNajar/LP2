<?php
function validarCamposRegistroTransporte($marca, $modelo, $anio, $patente)
{
  $mensaje = '';

  //Limpieza de los datos que vienen por parametro y asignaciones a variables
  $marca = trim(strip_tags($marca ?? ''));
  $modelo = trim(strip_tags($modelo ?? ''));
  $anio = trim(strip_tags($anio ?? ''));
  $patente = trim(strip_tags($patente ?? ''));

  //Validaciones para el campo de la marca del transporte
  if (empty($marca)) {
    $mensaje .= 'Por favor seleccione una marca.<br>';
  }

  //Validaciones para el campo del modelo
  if (empty($modelo)) {
    $mensaje .= 'Por favor ingrese un modelo de transporte.<br>';
  }

  //Validaciones para el campo del anio
  if (empty($anio)) {
    $mensaje .= 'Por favor ingrese el año del transporte.<br>';
  } elseif (!is_numeric($anio)) {
      $mensaje .= 'El año debe ser un número.<br>';
  } elseif (strlen($anio) != 4) {
      $mensaje .= 'El año debe tener 4 caracteres.<br>';
  } elseif ($anio < 1950 || $anio > date('Y')) {
      $mensaje .= 'El año debe estar entre 1950 y el año actual.<br>';
  }

  //Validaciones para el campo de la patente
  if (empty($patente)) {
    $mensaje .= 'Por favor ingrese la patente del transporte.<br>';
  } elseif (strlen($patente) > 10) {
    $mensaje .= 'La patente debe tener entre 1 y 10 caracteres.<br>';
  }

  return $mensaje;
}
?>
