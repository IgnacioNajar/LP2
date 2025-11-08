<?php
function validarCamposRegistroChofer($apellido, $nombre, $dni, $username, $password, $repeatPassword)
{
  $mensaje = '';
  $soloLetras = '/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/';

  //Limpieza de los datos que vienen por parametro y asignaciones a variables
  $apellido = trim(strip_tags($apellido ?? ''));
  $nombre = trim(strip_tags($nombre ?? ''));
  $dni = trim(strip_tags($dni ?? ''));
  $username = trim(strip_tags($username ?? ''));
  $password = trim($password ?? '');
  $repeatPassword = trim($repeatPassword ?? '');

  //Validaciones para el campo del apellido
  if (empty($apellido)) {
    $mensaje .= 'Por favor ingrese su apellido.<br>';
  } elseif (!preg_match($soloLetras, $apellido)) {
    $mensaje .= 'El apellido solo puede contener letras.<br>';
  }

  //Validaciones para el campo del nombre
  if (empty($nombre)) {
    $mensaje .= 'Por favor ingrese su nombre.<br>';
  } elseif (!preg_match($soloLetras, $nombre)) {
    $mensaje .= 'El nombre solo puede contener letras.<br>';
  }

  //Validaciones para el campo del DNI
  if (empty($dni)) {
    $mensaje .= 'Por favor ingrese su DNI.<br>';
  } elseif (!is_numeric($dni)) {
    $mensaje .= 'El DNI debe contener solo números.<br>';
  } elseif (strlen($dni) < 7 || strlen($dni) > 8) {
    $mensaje .= 'El DNI debe tener entre 7 y 8 dígitos.<br>';
  }

  //Validaciones para el campo del username
  if (empty($username)) {
    $mensaje .= 'Por favor ingrese su nombre de usuario.<br>';
  }

  //Validaciones para el campo de la contraseña
  if (empty($password)) {
    $mensaje .= 'Por favor ingrese su contraseña.<br>';
  } elseif (strlen($password) < 6) {
    $mensaje .= 'La contraseña debe tener al menos 6 caracteres.<br>';
  }

  //Validaciones para el campo de la repetición de la contraseña
  if (empty($repeatPassword)) {
    $mensaje .= 'Por favor repetí tu contraseña.<br>';
  }

  //Validaciones para la coincidencia entre las dos contraseñas
  if (!empty($password) && !empty($repeatPassword) && $password !== $repeatPassword) {
    $mensaje .= 'Las contraseñas no coinciden.<br>';
  }

  return $mensaje;
}
