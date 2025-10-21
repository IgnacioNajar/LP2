<?php
session_start();
require_once 'funciones/conexion.php';
require_once 'funciones/login.php';
require_once 'funciones/validar_login.php';
require_once 'funciones/sesion_usuario.php';

$MiConexion = ConexionBD();
$Mensaje = '';
$email_val = '';

if (isset($_POST['BotonLogin'])) {
    $email_val = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Validar campos
    $Mensaje = ValidarCamposLogin($email_val, $password);

    if (empty($Mensaje)) {
        // Intento de login
        $UsuarioLogueado = DatosLogin($email_val, $password, $MiConexion);

        if (!empty($UsuarioLogueado)) {
            if ($UsuarioLogueado['ACTIVO'] == 0) {
                $Mensaje = 'Ud. no se encuentra activo en el sistema.';
            } else {
                // Llamamos a la función para iniciar sesión
                IniciarSesionUsuario($UsuarioLogueado);

                header('Location: index.php');
                exit;
            }
        } else {
            $Mensaje = 'Datos incorrectos, ingresa nuevamente.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login al panel</title>
    <!-- Bootstrap -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Ingresa tus datos</h3>
                </div>
                <div class="panel-body">

                    <div class="text-center mb-3">
                        <img src="dist/img/login2.png" class="img-thumbnail" alt="Login">
                    </div>

                    <?php if (!empty($Mensaje)) { ?>
                        <div class="alert alert-warning">
                            <?php echo $Mensaje; ?>
                        </div>
                    <?php } ?>

                    <form role="form" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus
                                       value="<?php echo htmlspecialchars($email_val, ENT_QUOTES); ?>">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Contraseña" name="password" type="password">
                            </div>
                            <div class="form-group text-center">
                                Si no tienes cuenta, podés registrarte <a href="registro.php">aquí</a>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-default" name="BotonLogin">Ingresar</button>
                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>
</body>
</html>
