<?php
session_start();

if (!isset($_SESSION['usuario'])) {
  header('Location: login.php');
}

$usuario = $_SESSION['usuario'];
require_once('functions/select_viajes.php');
require_once('functions/conexion.php');
$monto = '';

$conexion = conexionBd();

if (!$miConexion) {
  echo 'Error al conectar con la base de datos.';
  exit;
}

$viajes = listarViajes($conexion);
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
            <h1>Lista de viajes registrados</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Viajes</li>
                    <li class="breadcrumb-item active">Listado</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">


                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Viajes cargados</h5>

                            <!-- Default Table -->
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Fecha Viaje</th>
                                        <th scope="col">Destino</th>
                                        <th scope="col">Camión</th>
                                        <th scope="col">Chofer</th>
                                        <th scope="col">Costo Viaje</th>
                                        <th scope="col">Monto Chofer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php foreach ($viajes as $indice => $viaje): ?>
                                    <tr class="table-success" data-bs-toggle="tooltip" data-bs-placement="left"
                                        data-bs-original-title="Viaje realizado">
                                        <th scope="row"><?= $indice + 1; ?></th>
                                        <td><?= $viaje['fechaViaje']; ?></td>
                                        <td><?= $viaje['destino']; ?></td>
                                        <td><?= $viaje['transporte']; ?></td>
                                        <td><?= $viaje['nombreChofer']; ?></td>
                                        <td>$<?= $viaje['costoViaje']; ?></td>
                                        <?php if (!$usuario['nivelId'] == 2): ?>
                                          <td>$<?= $monto .= $viaje['montoChofer'];
                                          if (!$usuario['nivelId'] == 3) {
                                            $monto .= ' ' . '(' . $viaje['porcentaje'] . '%)';
                                          }
                                          ?>
                                            <?php endif; ?>
                                          </td>
                                    </tr>
                                <?php endforeach; ?>

                                </tbody>
                            </table>
                            <!-- End Default Table Example -->

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
