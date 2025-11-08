<?php
session_start();

if (isset($_GET['exito'])) {
    $clase = 'success';
    $mensaje = 'El transporte se ha registrado correctamente.';
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
require_once('functions/select_marca.php');
require_once('functions/validar_registro_transporte.php');
require_once('functions/insertar_transporte.php');

$miConexion = conexionBd();

if (!$miConexion) {
    echo 'Error al conectar con la base de datos.';
    exit;
}

$marcas = listarMarcas($miConexion);
$mensaje = '';

if (isset($_POST['boton_registrar'])) {
    $clase = 'warning';

    $marca = strip_tags(trim($_POST['marca'] ?? ''));
    $modelo = strip_tags(trim($_POST['modelo'] ?? ''));
    $anio = strip_tags(trim($_POST['anio'] ?? ''));
    $patente = strip_tags(trim($_POST['patente'] ?? ''));
    $habilitado = isset($_POST['habilitado']) && $_POST['habilitado'] === "1" ? 1 : 0;

    $mensaje = validarCamposRegistroTransporte($marca, $modelo, $anio, $patente);

    if (empty($mensaje)) {
        $transporteRegistrado = insertarTransporte($miConexion, $marca, $modelo, $anio, $patente, $habilitado);

        if ($transporteRegistrado) {
            $clase = 'success';
            $mensaje = 'El transporte se ha registrado correctamente.';

            header('Location: transporte_carga.php?exito=1');
            exit;
        } elseif ($transporteRegistrado == null) {
            $mensaje = 'Esta patente ya existe. Pruebe con otra.';
        } else {
            $mensaje = 'Error al registrar el transporte.';
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
            <h1>Registrar un nuevo transporte</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Transportes</li>
                    <li class="breadcrumb-item active">Carga Camión</li>
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

                            <form class="row g-3" method="post">

                                <!-- Campo Marca -->
                                <div class="col-12">
                                    <label for="selector" class="form-label">Marca (*)</label>
                                    <select class="form-select" aria-label="Selector" id="selector" name="marca">
                                        <option selected="" value="">Selecciona una opcion</option>
                                        <?php foreach ($marcas as $marca): ?>
                                            <option
                                                value="<?= $marca['denominacion']; ?>"
                                                <?= isset($_POST['marca']) && $_POST['marca'] === $marca['denominacion'] ? 'selected' : ''; ?>>
                                                <?= $marca['denominacion']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <!-- Campo Modelo -->
                                <div class="col-12">
                                    <label for="modelo" class="form-label">Modelo (*)</label>
                                    <input type="text" class="form-control" id="modelo" name="modelo"
                                        value="<?= isset($_POST['modelo']) ? htmlspecialchars($modelo, ENT_QUOTES) : ''; ?>">
                                </div>

                                <!-- Campo Año -->
                                <div class="col-12">
                                    <label for="año" class="form-label">Año</label>
                                    <input type="text" class="form-control" id="año" name="anio"
                                        value="<?= isset($_POST['anio']) ? htmlspecialchars($anio, ENT_QUOTES) : ''; ?>">
                                </div>

                                <!-- Campo Patente -->
                                <div class="col-12">
                                    <label for="patente" class="form-label">Patente (*)</label>
                                    <input type="text" class="form-control" id="patente" name="patente"
                                        value="<?= isset($_POST['patente']) ? htmlspecialchars($patente, ENT_QUOTES) : ''; ?>">
                                </div>

                                <!--
                                <div class="col-12">
                                    <label for="selector" class="form-label">Tipo carga (*)</label>
                                    <select class="form-select" aria-label="Selector" id="selector">
                                        <option selected="">Selecciona una opcion</option>
                                        <option>Congelados</option>
                                        <option>Carga normal</option>
                                    </select>
                                </div>
                                -->

                                <!-- Campo Disponibilidad -->
                                <div class="col-12">
                                    <label class="form-label">Disponibilidad</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck1" name="habilitado" value="1"
                                            <?= isset($_POST['habilitado']) ? 'checked' : ''; ?>>
                                        <label class="form-check-label" for="gridCheck1"> Habilitado</label>
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
