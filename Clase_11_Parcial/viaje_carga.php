<?php
session_start();

if (isset($_GET['exito'])) {
    $clase = 'success';
    $mensaje = 'El viaje se ha registrado correctamente.';
}

if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit;
}

$usuario = $_SESSION['usuario'];

if ($usuario['nivelId'] == 3) {
    echo "  <script>
                alert('No tenés permisos para acceder a esta página.');
                window.location.href='index.php';
            </script>
        ";
    exit;
}

// Incluimos los scripts que contienen las funciones necesarias
require_once('functions/conexion.php');
require_once('functions/select_chofer.php');
require_once('functions/select_transporte.php');
require_once('functions/select_destino.php');
require_once('functions/validar_registro_viaje.php');
require_once('functions/insertar_viaje.php');

$miConexion = conexionBd();

if (!$miConexion) {
    echo 'Error al conectar con la base de datos.';
    exit;
}

$choferes = listarChoferes($miConexion);
$transportes = listarTransportes($miConexion);
$destinos = listarDestinos($miConexion);
$mensaje = '';

if (isset($_POST['boton_registrar'])) {
    $clase = 'warning';

    $choferDNI = strip_tags(trim($_POST['chofer'] ?? ''));
    $transporte = strip_tags(trim($_POST['transporte'] ?? ''));
    $fecha = strip_tags(trim($_POST['fecha'] ?? ''));
    $destino = strip_tags(trim($_POST['destino'] ?? ''));
    $costoViaje = strip_tags(trim($_POST['costoViaje'] ?? ''));
    $porcentajeChofer = strip_tags(trim($_POST['porcentajeChofer'] ?? ''));

    $mensaje = validarCamposRegistroViaje($choferDNI, $transporte, $fecha, $destino, $costoViaje, $porcentajeChofer);

    if (empty($mensaje)) {
        $viajeRegistrado = insertarViaje($miConexion, $choferDNI, $transporte, $fecha, $destino, $costoViaje, $porcentajeChofer);

        if ($viajeRegistrado) {
            $clase = 'success';
            $mensaje = 'El viaje se ha registrado correctamente.';
            header('Location: viaje_carga.php?exito=1');
            exit;
        } else {
            $mensaje = 'Error al registrar el viaje.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

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
            <h1>Registrar un nuevo viaje</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Viajes</li>
                    <li class="breadcrumb-item active">Carga</li>
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

                            <form class="row g-3" method="post">

                                <!-- Campo Chofer -->
                                <div class="col-12">
                                    <label for="selector" class="form-label">Chofer (*)</label>
                                    <select class="form-select" aria-label="Selector" id="selector" name="chofer">
                                        <option selected="" value="">Selecciona una opcion</option>
                                        <?php foreach ($choferes as $chofer): ?>
                                            <option
                                                value="<?= $chofer['dni']; ?>"
                                                <?= isset($_POST['chofer']) && $_POST['chofer'] === $chofer['dni'] ? 'selected' : ''; ?>>
                                                <?= $chofer['apellido'] . ', ' . $chofer['nombre'] . ' (' . $chofer['dni'] . ')'; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <!-- Campo Transporte -->
                                <div class="col-12">
                                    <label for="selector" class="form-label">Transporte (*)</label>
                                    <select class="form-select" aria-label="Selector" id="selector" name="transporte">
                                        <option selected="" value="">Selecciona una opcion</option>
                                        <?php foreach ($transportes as $transporte): ?>
                                            <option
                                                value="<?= $transporte['patente']; ?>"
                                                <?= isset($_POST['transporte']) && $_POST['transporte'] === $transporte['patente'] ? 'selected' : ''; ?>>
                                                <?= $transporte['marca'] . ' - ' . $transporte['modelo'] . ' - ' . $transporte['patente']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <!-- Campo Fecha -->
                                <div class="col-12">
                                    <label for="fecha" class="form-label">Fecha programada (*)</label>
                                    <input type="date" class="form-control" id="fecha" name="fecha"
                                        value="<?php
                                                if (isset($_POST['fecha']) && strtotime($_POST['fecha'])) {
                                                    echo htmlspecialchars(date('Y-m-d', strtotime($_POST['fecha'])), ENT_QUOTES);
                                                }
                                                ?>">
                                </div>

                                <!-- Campo Destino -->
                                <div class="col-12">
                                    <label for="selector" class="form-label">Destino (*)</label>
                                    <select class="form-select" aria-label="Selector" id="selector" name="destino">
                                        <option selected="" value="">Selecciona una opcion</option>
                                        <?php foreach ($destinos as $destino): ?>
                                            <option
                                                value="<?= $destino['denominacion']; ?>"
                                                <?= isset($_POST['destino']) && $_POST['destino'] === $destino['denominacion'] ? 'selected' : ''; ?>>
                                                <?= $destino['denominacion']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <!-- Campo Costo -->
                                <div class="col-md-6">
                                    <label for="costo" class="form-label">Costo (*)</label>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="text" class="form-control" id="costo" name="costoViaje"
                                            value="<?= isset($_POST['costoViaje']) ? htmlspecialchars($costoViaje, ENT_QUOTES) : ''; ?>">
                                    </div>
                                </div>

                                <!-- Campo Porcentaje Chofer -->
                                <div class="col-lg-6">
                                    <label for="porc" class="form-label">Porcentaje chofer (*)</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="porc" name="porcentajeChofer"
                                            value="<?= isset($_POST['porcentajeChofer']) ? htmlspecialchars($porcentajeChofer, ENT_QUOTES) : ''; ?>">
                                        <span class="input-group-text">%</span>
                                    </div>
                                </div>

                                <!-- Botones -->
                                <div class="text-center">
                                    <a href="index.php" class="btn btn-primary">Volver al inicio</a>
                                    <button type="reset" class="btn btn-secondary">Limpiar Campos</button>
                                    <button class="btn btn-success" type="submit" name="boton_registrar">Registrar</button>
                                </div>
                            </form><!-- Vertical Form -->

                        </div>
                    </div>
                </div>
            </div>
        </section>

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
