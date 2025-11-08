<?php
function validarCamposLogin($username, $password)
{
    $mensaje = '';

    //Limpieza de los datos que vienen por parametro y asignaciones a variables
    $username = trim(strip_tags($username ?? ''));
    $password = trim($password ?? '');

    //Validaciones para el campo del username
    if (empty($username)) {
        $mensaje .= "Por favor ingrese su nombre de usuario.<br>";
    }

    //Validaciones para el campo de la contraseña
    if (empty($password)) {
        $mensaje .= 'Por favor ingrese su contraseña.<br>';
    }

    return $mensaje;
}
?>
