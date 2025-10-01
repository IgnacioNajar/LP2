<?php
require_once('functions.php');
require_once('arrays.php');
include_once('mis_datos.php');

//Se asocian variables a llamadas de las funciones para posterior utilizacion
$viajesFormateados = formatearViajes($listadoViajes);

$sumatoriaViajesFinalizados = calcularMontoViajesFinalizados($listadoViajes, $estadoViaje['finalizado']);
$sumatoriaViajesFinalizadosFormateada = formatearValor($sumatoriaViajesFinalizados);

$sumatoriaTotalViajes = calcularSumatoriaCostoTotalViaje($listadoViajes);
$sumatoriaTotalViajesFormateada = formatearValor($sumatoriaTotalViajes);

$cantidadViajesBaratos = calcularCantidadViajesMenoresA300k($listadoViajes);
?>

<!DOCTYPE html>
<html>

<?php include_once('head.php'); ?>

<body>
    <div class="wrapper">

        <!-- MAIN HEADER -->
        <?php include_once('header.php'); ?>

        <!-- SIDEBAR -->
        <?php
        $paginaActual = 'listado';
        include_once('sidebar.php');
        ?>

        <!-- MAIN PANEL -->
        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">

                    <h4 class="page-title">Listado de Viajes</h4>
                    <p class="card-category">Se visualizan <?= count($listadoViajes); ?> viajes registrados.</p>

                    <!-- TABLE -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">

                                    <table class="table table-head-bg-success table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Fecha Viaje</th>
                                                <th>Chofer</th>
                                                <th>Destino</th>
                                                <th>Precio Base</th>
                                                <th>Peso (Tonelada)</th>
                                                <th>Costo Peajes</th>
                                                <th>Total viaje</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <!-- Inicio bloque PHP foreach -->
                                            <?php foreach ($viajesFormateados as $viaje): ?>
                                                <tr>
                                                    <!-- Número de fila -->
                                                    <td><?= $viaje['indice']; ?></td>

                                                    <!-- Fecha del viaje, con clase de color según el estado -->
                                                    <td class="text-<?= $viaje['estiloEstado']; ?>"><?= $viaje['fecha']; ?></td>

                                                    <!-- Nombre del chofer -->
                                                    <td><?= $viaje['chofer']; ?></td>

                                                    <!-- Destino del viaje -->
                                                    <td><?= $viaje['destino']; ?></td>

                                                    <!-- Precio base del viaje formateado -->
                                                    <td>$<?= $viaje['precioBase']; ?></td>

                                                    <!-- Peso del viaje en toneladas y barra de progreso -->
                                                    <td title="<?= $viaje['pesoTn'] * 1000; ?> Kgs.">
                                                        <?= $viaje['pesoTn']; ?> Tn.
                                                        <br />
                                                        <div class="progress">
                                                            <div class="progress-bar bg-<?= $viaje['estiloPeso']; ?>" role="progressbar"
                                                                style="width: <?= $viaje['porcentajeBarra']; ?>%"
                                                                aria-valuenow="<?= $viaje['porcentajeBarra']; ?>" aria-valuemin="0"
                                                                aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <!-- Costo de peajes y total del viaje -->
                                                    <td title="<?= $viaje['cantidadPeajes']; ?> peajes a $1500 cada uno">
                                                        $<?= $viaje['costoPeaje']; ?>
                                                    </td>

                                                    <!-- Costo total del viaje -->
                                                    <td>$<?= $viaje['costoTotalViaje']; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                            <!-- Fin bloque PHP foreach -->

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CARDS -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-stats card-success">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center">
                                                <i class="la la-bar-chart"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 d-flex align-items-center">

                                            <!-- Monto finalizados -->
                                            <div class="numbers">
                                                <p class="card-category">Monto Finalizados</p>
                                                <h4 class="card-title">$<?= $sumatoriaViajesFinalizadosFormateada; ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card card-stats card-danger">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center">
                                                <i class="la la-newspaper-o"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 d-flex align-items-center">
                                            <!-- Menores a $300 mil -->
                                            <div class="numbers">
                                                <p class="card-category">Menores a $300 mil</p>
                                                <h4 class="card-title"><?= $cantidadViajesBaratos; ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card card-stats card-primary">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center">
                                                <i class="la la-check-circle"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 d-flex align-items-center">
                                            <!-- Total costo -->
                                            <div class="numbers">
                                                <p class="card-category">Total costo</p>
                                                <h4 class="card-title">$<?= $sumatoriaTotalViajesFormateada; ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- FOOTER -->
            <?php include_once('footer.php'); ?>
        </div>

    </div>
</body>

<!-- SCRIPTS -->
<script src="assets/js/core/jquery.3.2.1.min.js"></script>
<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/plugin/chartist/chartist.min.js"></script>
<script src="assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="assets/js/ready.min.js"></script>
<script src="assets/js/demo.js"></script>
</html>
