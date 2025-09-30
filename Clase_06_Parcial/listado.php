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

<?php include_once('header.php'); ?>

<body>
    <div class="wrapper">

        <!-- MAIN HEADER -->
        <div class="main-header">
            <div class="logo-header">
                <a href="index.html" class="logo">
                    Primer Desempeño
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
            </div>

            <nav class="navbar navbar-header navbar-expand-lg">
                <div class="container-fluid">

                    <!-- SEARCH -->
                    <form class="navbar-left navbar-form nav-search mr-md-3" action="">
                        <div class="input-group">
                            <input type="text" placeholder="Search ..." class="form-control">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="la la-search search-icon"></i>
                                </span>
                            </div>
                        </div>
                    </form>

                    <!-- TOPBAR ICONS -->
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">

                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-envelope"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-bell"></i>
                                <span class="notification">3</span>
                            </a>
                            <ul class="dropdown-menu notif-box" aria-labelledby="navbarDropdown">
                                <li>
                                    <div class="dropdown-title">You have 4 new notification</div>
                                </li>
                                <li>
                                    <div class="notif-center">
                                        <a href="#">
                                            <div class="notif-icon notif-primary"> <i class="la la-user-plus"></i></div>
                                            <div class="notif-content">
                                                <span class="block">New user registered</span>
                                                <span class="time">5 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-icon notif-success"> <i class="la la-comment"></i></div>
                                            <div class="notif-content">
                                                <span class="block">Sue Palacios commented on Admin</span>
                                                <span class="time">12 minutes ago</span>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="see-all" href="javascript:void(0);">
                                        <strong>See all notifications</strong>
                                        <i class="la la-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                <img src="<?= $user_photo; ?>" alt="user-img" width="36" class="img-circle">
                                <span><?= $user_name; ?></span>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li>
                                    <div class="user-box">
                                        <div class="u-img"><img src="<?= $user_photo; ?>" alt="user"></div>
                                        <div class="u-text">
                                            <h4><?= $user_name; ?></h4>
                                            <p class="text-muted"><?= $user_email; ?></p>
                                            <a href="profile.html" class="btn btn-rounded btn-danger btn-sm">
                                                View Profile
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="ti-user"></i> My Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="ti-settings"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="fa fa-power-off"></i> Logout</a>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <!-- SIDEBAR -->
        <?php
        $pagina_actual = 'listado';
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
