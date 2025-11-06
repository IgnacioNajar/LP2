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
    $mensaje .= 'Por favor ingresá tu apellido.<br>';
  }

  if (empty($nombre)) {
    $mensaje .= 'Por favor ingresá tu nombre.<br>';
  }

  if (empty($dni)) {
    $mensaje .= 'Por favor ingresá tu DNI.<br>';
  }

  if (empty($username)) {
    $mensaje .= 'Por favor ingresá tu nombre de usuario.<br>';
  }

  if (empty($password)) {
    $mensaje .= 'Por favor ingresá tu contraseña.<br>';
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
