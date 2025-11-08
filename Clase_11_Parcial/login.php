<?php
session_start();

if (isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit;
}

// Incluimos los scripts que contienen las funciones necesarias
require_once 'functions/conexion.php';
require_once 'functions/login.php';
require_once 'functions/validar_login.php';
require_once 'functions/log.php';

$miConexion = ConexionBD();

if (!$miConexion) {
    echo 'Error al conectar con la base de datos.';
    exit;
}

$mensaje = '';

if (isset($_POST['boton_login'])) {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    $mensaje = validarCamposLogin($username, $password);

    if (empty($mensaje)) {
        $usuarioLogueado = datosLogin($username, $password, $miConexion);

        if (!empty($usuarioLogueado)) {
            if ($usuarioLogueado['activo'] == 0) {
                $mensaje = 'Usted no se encuentra activo en el sistema.';
            } else {
                $_SESSION['usuario'] = $usuarioLogueado;
                header('Location: index.php');
                registrarLog("Inicio de sesión exitoso para el usuario: $username", 'INFO');
                exit;
            }
        } else {
            $mensaje = 'Los datos ingresados son incorrectos, ingreselos nuevamente.';
            registrarLog("Intento de inicio de sesión fallido para el usuario: $username", 'ERROR');
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<?php require_once('head.php'); ?>

<body>

    <main>
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <img src="assets/img/logo.png" alt="">
                                    <span class="d-none d-lg-block">Panel de Administración</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Ingresa tu cuenta</h5>
                                        <p class="text-center small">Ingresa tu datos de usuario y clave</p>
                                    </div>

                                    <form class="row g-3 needs-validation" method="post" novalidate>

                                        <!-- Mensajes dinamicos dependiendo de la validacion -->
                                        <?php if (!empty($mensaje)): ?>
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                <i class="bi bi-exclamation-triangle me-1"></i>
                                                <?= $mensaje; ?>
                                            </div>
                                        <?php endif; ?>

                                        <!-- Campo Usuario -->
                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Usuario</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input class="form-control" id="yourUsername" name="username" required
                                                    value="<?= isset($_POST['username']) ? htmlspecialchars($username, ENT_QUOTES) : ''; ?>">
                                                <div class="invalid-feedback">Ingresa tu usuario</div>
                                            </div>
                                        </div>

                                        <!-- Campo Clave -->
                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Clave</label>
                                            <div class="input-group">
                                                <input
                                                    class="form-control"
                                                    id="yourPassword"
                                                    name="password"
                                                    type="password"
                                                    required>
                                                <!-- Boton para ver la clave -->
                                                <button
                                                    type="button"
                                                    class="btn btn-outline-secondary pw-toggle"
                                                    data-target="#yourPassword"
                                                    tabindex="-1">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <div class="invalid-feedback">Ingresa tu clave</div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit" name="boton_login">Login</button>
                                        </div>
                                    </form>

                                </div>
                            </div>

                            <div class="credits">
                                <!-- All the links in the footer should remain intact. -->
                                <!-- You can delete the links only if you purchased the pro version. -->
                                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php require_once('footer.php'); ?>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script> -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>-->
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>

    <!--<script src="assets/vendor/php-email-form/validate.js"></script> -->

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
