<?php
function ValidarCamposLogin($email, $password) {
    $Mensaje = '';

    $email = trim(strip_tags($email ?? ''));
    $password = trim($password ?? '');

    if (empty($email)) {
        $Mensaje = 'Por favor ingresá tu email.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $Mensaje = 'Por favor ingresá un email válido.';
    } elseif (empty($password)) {
        $Mensaje = 'Por favor ingresá tu contraseña.';
    }

    return $Mensaje; // Retorna mensaje vacío si todo está bien
}
?>
