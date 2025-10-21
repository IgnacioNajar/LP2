<?php
require_once 'funciones/conexion.php';

$MiConexion=ConexionBD();

if (!$MiConexion) {
    echo 'Error al conectar con la base de datos.';
    exit();
}

require_once 'funciones/select_paises.php';
$ListadoPaises = Listar_Paises($MiConexion);

require_once 'funciones/validacion_registro_usuario.php';
require_once 'funciones/insertar_usuarios.php';


$Mensaje = "";
$Estilo = "";

if (isset($_POST['BotonRegistrar'])) {
    // Validamos los datos
    $Mensaje = validarCampos();

    if (empty($Mensaje)) {
        // Intentamos insertar el usuario en la DB
        if (InsertarUsuarios($MiConexion) !== false) {
            $Mensaje = "El registro fue exitoso.";
            $Estilo = "success";

            // Limpiamos los datos del formulario
            $_POST = [];
        } else {
            $Mensaje = "Hubo un error al registrar el usuario. Intente nuevamente.";
            $Estilo = "danger";
        }
    } else {
        $Estilo = "danger"; // Si hay errores de validación
    }
}

require_once 'header.inc.php';
?>

</head>

<body>

    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Pagina inicial</a>
            </div>
            <!-- /.navbar-header -->

            <?php require_once 'user.inc.php'; ?>
            <!-- /.navbar-top-links -->

            <?php require_once 'menu.inc.php'; ?>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Formulario de Registración</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ingresa tus datos
                        </div>
                        <div class="panel-body">
                            <form role="form" method='post'>

                                <div class="row">
                                    <div class="col-lg-4" style="text-align: center;">
                                        <img src="dist/img/register.png" />
                                        <br />
                                    </div>
                                    <div class="col-lg-6">

                                        <!-- Mostrar mensaje en el formulario -->
                                        <?php if (!empty($Mensaje)): ?>
                                            <div class="alert alert-<?= $Estilo ?>">
                                                <?= $Mensaje ?>
                                            </div>
                                        <?php endif; ?>

                                        <div class="form-group">
                                            <label>Nombre:</label>
                                            <input class="form-control" type="text" name="Nombre" id="nombre"
                                                value="<?= isset($_POST['Nombre']) ? htmlspecialchars(trim($_POST['Nombre'])) : '' ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Apellido:</label>
                                            <input class="form-control" type="text" name="Apellido" id="apellido"
                                                value="<?= isset($_POST['Apellido']) ? htmlspecialchars(trim($_POST['Apellido'])) : '' ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input class="form-control" type="text" name="Email" id="email"
                                                value="<?= isset($_POST['Email']) ? htmlspecialchars(trim($_POST['Email'])) : '' ?>" >
                                        </div>

                                        <div class="form-group">
                                            <label>Clave:</label>
                                            <input class="form-control" type="password" name="Password" id="password" value="" >
                                        </div>

                                        <div class="form-group">
                                            <label>Reingrese la clave:</label>
                                            <input class="form-control" type="password" name="PasswordReingresada" id="passwordreingresada" value="" >
                                        </div>

                                        <div class="form-group">
                                            <label>Pais:</label>
                                            <select class="form-control" name="Pais" id="pais">
                                                <option value="">Selecciona...</option>
                                                <?php foreach ($ListadoPaises as $pais): ?>
                                                    <option value="<?= $pais['id'] ?>" <?= (isset($_POST['Pais']) && $_POST['Pais'] == $pais['id']) ? 'selected' : '' ?>>
                                                        <?= $pais['nombre'] ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Sexo:</label><br>
                                            <label class="radio-inline">
                                                <input type="radio" name="Sexo" id="SexoF" value="F"
                                                    <?= (isset($_POST['Sexo']) && $_POST['Sexo'] == 'F') ? 'checked' : '' ?>> Femenino
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="Sexo" id="SexoM" value="M"
                                                    <?= (isset($_POST['Sexo']) && $_POST['Sexo'] == 'M') ? 'checked' : '' ?>> Masculino
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="Sexo" id="SexoO" value="O"
                                                    <?= (isset($_POST['Sexo']) && $_POST['Sexo'] == 'O') ? 'checked' : '' ?>> Otro
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label>Condiciones del sitio:</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="Condiciones" value="SI"
                                                        <?= (isset($_POST['Condiciones']) && $_POST['Condiciones'] == 'SI') ? 'checked' : '' ?>> Acepto los T&eacute;rminos y Condiciones
                                                </label>
                                            </div>

                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="Suscripcion" value="SI"
                                                        <?= (isset($_POST['Suscripcion']) && $_POST['Suscripcion'] == 'SI') ? 'checked' : '' ?>> Deseo suscribirme al Newsletter
                                                </label>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-default" value="Registrar" name="BotonRegistrar" >Registrarme</button>
                                        o <a href="index.php">Volver al inicio</a>
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                            </form>

                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <?php require_once 'footer.inc.php'; ?>
