<?php
function validarCamposLogin($username, $password)
{
  $mensaje = '';

  $username = trim(strip_tags($username ?? ''));
  $password = trim($password ?? '');

  if (empty($username)) {
    $mensaje .= "Por favor ingresá tu nombre de usuario.<br>";
  }
  if (empty($password)) {
    $mensaje .= 'Por favor ingresá tu contraseña.<br>';
  }

  return $mensaje;
}
