<?php
function validarCampos() {
    $MensajeError = "";

    $nombre = trim($_POST['Nombre'] ?? '');
    if (empty($nombre)) {
        $MensajeError .= "Por favor, ingresá tu nombre.<br>";
    }

    $apellido = trim($_POST['Apellido'] ?? '');
    if (empty($apellido)) {
        $MensajeError .= "Por favor, ingresá tu apellido.<br>";
    }

    $email = trim($_POST['Email'] ?? '');
    if (empty($email)) {
        $MensajeError .= "Por favor, ingresá tu correo electrónico.<br>";
    } elseif (strlen($email) < 6) {
        $MensajeError .= "El correo electrónico debe tener al menos 6 caracteres.<br>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $MensajeError .= "Por favor, ingresá un correo electrónico válido.<br>";
    }

    $password = trim($_POST['Password'] ?? '');
    $passwordReingresada = trim($_POST['PasswordReingresada'] ?? '');

    if (empty($password)) {
        $MensajeError .= "Por favor, ingresá una contraseña.<br>";
    } elseif (strlen($password) < 6) {
        $MensajeError .= "La contraseña debe tener al menos 6 caracteres.<br>";
    }

    if (empty($passwordReingresada)) {
        $MensajeError .= "Reingresá tu contraseña para confirmarla.<br>";
    }

    if (!empty($password) && !empty($passwordReingresada) && $password !== $passwordReingresada) {
        $MensajeError .= "Las contraseñas no coinciden.<br>";
    }

    $pais = $_POST['Pais'] ?? '';
    if (empty($pais)) {
        $MensajeError .= "Seleccioná tu país de residencia.<br>";
    }

    $sexo = $_POST['Sexo'] ?? '';
    if (empty($sexo)) {
        $MensajeError .= "Seleccioná tu sexo.<br>";
    }

    $condiciones = $_POST['Condiciones'] ?? '';
    if (empty($condiciones)) {
        $MensajeError .= "Debés aceptar los Términos y Condiciones para continuar.<br>";
    }

    return $MensajeError;
}
?>
