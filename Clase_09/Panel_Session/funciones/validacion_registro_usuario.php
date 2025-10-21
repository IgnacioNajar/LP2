<?php
function validarCampos($vConexion) {
    $MensajeError = "";

    // Limpiamos y asignamos los campos
    $nombre = strip_tags(trim($_POST['Nombre'] ?? ''));
    $apellido = strip_tags(trim($_POST['Apellido'] ?? ''));
    $email = strip_tags(trim($_POST['Email'] ?? ''));
    $password = trim($_POST['Password'] ?? '');
    $passwordReingresada = trim($_POST['PasswordReingresada'] ?? '');
    $pais = isset($_POST['Pais']) ? (int)$_POST['Pais'] : 0; // ID como entero
    $sexo = strip_tags(trim($_POST['Sexo'] ?? ''));
    $condiciones = isset($_POST['Condiciones']); // booleano

    // Validación de nombre
    if (empty($nombre)) {
        $MensajeError .= "Por favor, ingresá tu nombre.<br>";
    } elseif (strlen($nombre) < 3) {
        $MensajeError .= "El nombre debe tener al menos 3 caracteres.<br>";
    }

    // Validación de apellido
    if (empty($apellido)) {
        $MensajeError .= "Por favor, ingresá tu apellido.<br>";
    } elseif (strlen($apellido) < 3) {
        $MensajeError .= "El apellido debe tener al menos 3 caracteres.<br>";
    }

    // Validación de email
    if (empty($email)) {
        $MensajeError .= "Por favor, ingresá tu correo electrónico.<br>";
    } elseif (strlen($email) < 6) {
        $MensajeError .= "El correo electrónico debe tener al menos 6 caracteres.<br>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $MensajeError .= "Por favor, ingresá un correo electrónico válido.<br>";
    } else {
        // Validación de existencia en la base de datos
        $stmt = $vConexion->prepare("SELECT id FROM usuario WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            $MensajeError .= "El correo electrónico ya está registrado.<br>";
        }
        $stmt->close();
    }

    // Validación de contraseña
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

    // Validación de país
    if ($pais <= 0) {
        $MensajeError .= "Seleccioná tu país de residencia.<br>";
    }

    // Validación de sexo
    if (empty($sexo) || !in_array($sexo, ['M', 'F', 'O'])) {
        $MensajeError .= "Seleccioná un sexo válido.<br>";
    }

    // Validación de aceptación de condiciones
    if (!$condiciones) {
        $MensajeError .= "Debés aceptar los Términos y Condiciones para continuar.<br>";
    }

    return $MensajeError;
}
?>
