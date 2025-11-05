<?php
function validarCamposRegistroChofer($apellido, $nombre, $dni, $username, $password)
{
  $mensaje = '';
  $apellido = trim(strip_tags($apellido ?? ''));
  $nombre = trim(strip_tags($nombre ?? ''));
  $dni = trim(strip_tags($dni ?? ''));
  $username = trim(strip_tags($username ?? ''));
  $password = trim($password ?? '');

  if (empty($apellido)) {
    $mensaje = 'Por favor ingresá tu apellido';
  } elseif (empty($nombre)) {
    $mensaje = 'Por favor ingresá tu nombre';
  } elseif (empty($dni)) {
    $mensaje = 'Por favor ingresá tu DNI';
  } elseif (empty($username)) {
    $mensaje = 'Por favor ingresá tu nombre de usuario';
  } elseif (empty($password)) {
    $mensaje = 'Por favor ingresá tu contraseña';
  }

  return $mensaje;
}
?>
