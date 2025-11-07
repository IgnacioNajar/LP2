<?php
function validarCamposLogin($username, $password)
{
  $mensaje = '';

  $username = trim(strip_tags($username ?? ''));
  $password = trim($password ?? '');

  if (empty($username)) {
    $mensaje .= "Por favor ingrese su nombre de usuario.<br>";
  }
  if (empty($password)) {
    $mensaje .= 'Por favor ingrese su contraseña.<br>';
  }

  return $mensaje;
}
