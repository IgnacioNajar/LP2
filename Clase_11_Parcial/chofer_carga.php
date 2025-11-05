<?php
session_start();

if (!isset($_SESSION['usuario'])) {
  header('Location: login.php');
  exit;
}

$usuario = $_SESSION['usuario'];

require_once('functions/conexion.php');
require_once('functions/validar_registro_chofer.php');
require_once('functions/insertar_chofer.php');

$miConexion = conexionBd();

$username = '';

if (isset($_POST['boton_registrar'])) {
  $apellido = strip_tags(trim($_POST['apellido'] ?? ''));
  $nombre = strip_tags(trim($_POST['nombre'] ?? ''));
  $dni = strip_tags(trim($_POST['dni'] ?? ''));
  $username = strip_tags(trim($_POST['usuario'] ?? ''));
  $password = $_POST['password'] ?? '';

  $mensaje = validarCamposRegistroChofer($apellido, $nombre, $dni, $username, $password);

  if (empty($mensaje)) {
    $choferRegistrado = insertarChofer($miConexion, $apellido, $nombre, $dni, $username, $password);

    if (!empty($choferRegistrado)) {

      if ($usuarioRegistrado['activo'] == 0) {
        registrarLog("Inicio de sesión exitoso para el usuario: $username", 'INFO');
        $mensaje = 'Usted no se encuentra activo en el sistema';
      } else {
        $_SESSION['usuario'] = $usuarioRegistrado;
        header('Location: index.php');
        exit;
      }
    } else {
      $mensaje = 'Los datos ingresados son incorrectos, ingrese nuevamente';
      registrarLog("Intento de inicio de sesión fallido para el usuario: $username", 'ERROR');
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
                                Los campos indicados con (*) son requeridos
                            </div>

                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <i class="bi bi-exclamation-triangle me-1"></i>
                                Mensajes de Alerta por validaciones
                            </div>

                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="bi bi-check-circle me-1"></i>
                                Los datos se guardaron correctamente!
                            </div>

                            <form class="row g-3" method="post">

                                <div class="col-12">
                                    <label for="Apellido" class="form-label">Apellido (*)</label>
                                    <input type="text" class="form-control" id="apellido">
                                </div>

                                <div class="col-12">
                                    <label for="Nombre" class="form-label">Nombre (*)</label>
                                    <input type="text" class="form-control" id="nombre">
                                </div>

                                <div class="col-12">
                                    <label for="dni" class="form-label">DNI (*)</label>
                                    <input type="text" class="form-control" id="dni">
                                </div>
                                <div class="col-12">
                                    <label for="user" class="form-label">Usuario</label>
                                    <input type="text" class="form-control" id="user">
                                </div>
                                <div class="col-12">
                                    <label for="pass" class="form-label">Clave</label>
                                    <input type="text" class="form-control" id="pass">
                                </div>

                                <div class="text-center">
                                    <button class="btn btn-primary">Registrar</button>
                                    <button type="reset" class="btn btn-secondary">Limpiar Campos</button>
                                    <a href="index.html" class="text-primary fw-bold">Volver al index</a>
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

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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
