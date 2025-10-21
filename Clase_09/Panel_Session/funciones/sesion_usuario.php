<?php
function IniciarSesionUsuario($UsuarioLogueado) {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    session_regenerate_id(true);

    $_SESSION['Usuario_Nombre']      = $UsuarioLogueado['NOMBRE'];
    $_SESSION['Usuario_Apellido']    = $UsuarioLogueado['APELLIDO'];
    $_SESSION['Usuario_Email']       = $UsuarioLogueado['EMAIL'];
    $_SESSION['Usuario_Nivel']       = $UsuarioLogueado['NIVEL'];
    $_SESSION['Usuario_Img']         = $UsuarioLogueado['IMG'];
    $_SESSION['Usuario_Saludo']      = $UsuarioLogueado['SALUDO'];
    $_SESSION['Usuario_NombreNivel'] = $UsuarioLogueado['NIVEL_NOMBRE'];
}
?>
