<?php
function validarCamposRegistroChofer($apellido, $nombre, $dni, $username, $password, $repeatPassword)
{
  $mensaje = '';

  $apellido = trim(strip_tags($apellido ?? ''));
  $nombre = trim(strip_tags($nombre ?? ''));
  $dni = trim(strip_tags($dni ?? ''));
  $username = trim(strip_tags($username ?? ''));
  $password = trim($password ?? '');
  $repeatPassword = trim($repeatPassword ?? '');

  if (empty($apellido)) {
    $mensaje .= 'Por favor ingrese su apellido.<br>';
  }

  if (empty($nombre)) {
    $mensaje .= 'Por favor ingrese su nombre.<br>';
  }

  if (empty($dni)) {
    $mensaje .= 'Por favor ingrese su DNI.<br>';
  }

  if (empty($username)) {
    $mensaje .= 'Por favor ingrese su nombre de usuario.<br>';
  }

  if (empty($password)) {
    $mensaje .= 'Por favor ingrese su contraseña.<br>';
  }

  if (empty($repeatPassword)) {
    $mensaje .= 'Por favor repetí tu contraseña.<br>';
  }

  if (!empty($password) && !empty($repeatPassword) && $password !== $repeatPassword) {
    $mensaje .= 'Las contraseñas no coinciden.<br>';
  }

  return $mensaje;
}
?>
