<?php
session_start();

if (isset($_GET['exito'])) {
    $clase = 'success';
    $mensaje = 'El chofer se ha registrado correctamente.';
}

if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit;
}

// Incluimos los scripts que contienen las funciones necesarias
require_once('functions/conexion.php');
require_once('functions/validar_registro_chofer.php');
require_once('functions/insertar_chofer.php');

$miConexion = conexionBd();

if (!$miConexion) {
    echo 'Error al conectar con la base de datos.';
    exit;
}

$mensaje = '';

if (isset($_POST['boton_registrar'])) {
    $clase = 'warning';

    $apellido = strip_tags(trim($_POST['apellido'] ?? ''));
    $nombre = strip_tags(trim($_POST['nombre'] ?? ''));
    $dni = strip_tags(trim($_POST['dni'] ?? ''));
    $username = strip_tags(trim($_POST['username'] ?? ''));
    $password = $_POST['password'] ?? '';
    $repeatPassword = $_POST['repeatPassword'] ?? '';

    $mensaje = validarCamposRegistroChofer($apellido, $nombre, $dni, $username, $password, $repeatPassword);

    if (empty($mensaje)) {
        $choferRegistrado = insertarChofer($miConexion, $apellido, $nombre, $dni, $username, $password);

        if ($choferRegistrado) {
            $clase = 'success';
            $mensaje = 'El chofer se ha registrado correctamente.';

            header('Location: chofer_carga.php?exito=1');
            exit;
        } elseif ($choferRegistrado == null) {
            $mensaje = 'Este nombre de usuario ya existe. Pruebe con otro.';
        } else {
            $mensaje = 'Error al registrar el chofer.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<?php require_once('head.php'); ?>

<body>

    <!-- ======= Header ======= -->
    <?php require_once('header.php'); ?>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <?php require_once('sidebar.php'); ?>
    <!-- End Sidebar-->

    <!-- ======= Main ======= -->
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Registrar un nuevo chofer</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Transportes</li>
                    <li class="breadcrumb-item active">Carga Chofer</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">

                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Ingresa los datos</h5>
                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                <i class="bi bi-info-circle me-1"></i>
                                Los campos indicados con (*) son requeridos.
                            </div>

                            <!-- Mensajes dinamicos dependiendo de la validacion -->
                            <?php if (!empty($mensaje)) {
                                if ($clase == 'warning') { ?>
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <i class="bi bi-exclamation-triangle me-1"></i>
                                        <?= $mensaje; ?>
                                    </div>
                                <?php } else { ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <i class="bi bi-check-circle me-1"></i>
                                        <?= $mensaje; ?>
                                    </div>
                            <?php }
                            } ?>

                            <form class="row g-3" method="post" autocomplete="off">

                                <!-- Campo Apellido -->
                                <div class="col-12">
                                    <label for="apellido" class="form-label">Apellido (*)</label>
                                    <input type="text" class="form-control" id="apellido" name="apellido"
                                        value="<?= isset($_POST['apellido']) ? htmlspecialchars($apellido, ENT_QUOTES) : ''; ?>"
                                        autocomplete="off">
                                </div>

                                <!-- Campo Nombre -->
                                <div class="col-12">
                                    <label for="nombre" class="form-label">Nombre (*)</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre"
                                        value="<?= isset($_POST['nombre']) ? htmlspecialchars($nombre, ENT_QUOTES) : ''; ?>"
                                        autocomplete="off">
                                </div>

                                <!-- Campo DNI -->
                                <div class="col-12">
                                    <label for="dni" class="form-label">DNI (*)</label>
                                    <input type="text" class="form-control" id="dni" name="dni"
                                        value="<?= isset($_POST['dni']) ? htmlspecialchars($dni, ENT_QUOTES) : ''; ?>"
                                        autocomplete="off">
                                </div>

                                <!-- Campo Username -->
                                <div class="col-12">
                                    <label for="user" class="form-label">Usuario</label>
                                    <input type="text" class="form-control" id="user" name="username"
                                        value="<?= isset($_POST['username']) ? htmlspecialchars($username, ENT_QUOTES) : ''; ?>"
                                        autocomplete="new-username">
                                </div>

                                <!-- Campo Contraseña -->
                                <div class="col-12">
                                    <label for="pass" class="form-label">Clave</label>
                                    <div class="input-group">
                                        <input
                                            type="password"
                                            class="form-control"
                                            id="pass"
                                            name="password"
                                            autocomplete="new-password">

                                        <!-- Boton para ver la clave -->
                                        <button
                                            type="button"
                                            class="btn btn-outline-secondary pw-toggle"
                                            data-target="#pass"
                                            tabindex="-1">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                    </div>
                                </div>

                                <!-- Campo Repetir Contraseña -->
                                <div class="col-12">
                                    <label for="repeatPassword" class="form-label">Repetir contraseña</label>
                                    <div class="input-group">
                                        <input
                                            type="password"
                                            name="repeatPassword"
                                            class="form-control"
                                            id="repeatPassword">

                                        <!-- Boton para ver la clave -->
                                        <button
                                            type="button"
                                            class="btn btn-outline-secondary pw-toggle"
                                            data-target="#repeatPassword"
                                            tabindex="-1">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                    </div>
                                </div>

                                <!-- Botones -->
                                <div class="text-center">
                                    <a href="index.php" class="btn btn-primary">Volver al inicio</a>
                                    <button type="reset" class="btn btn-secondary">Limpiar Campos</button>
                                    <button class="btn btn-success" type="submit" name="boton_registrar">Registrar</button>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>

            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php require_once('footer.php'); ?>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- Vendor JS -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>
