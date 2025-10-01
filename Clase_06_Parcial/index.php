<?php
include_once('mis_datos.php');
?>

<!DOCTYPE html>
<html lang="es">

<?php include_once('head.php'); ?>

<body>
    <div class="wrapper">

        <!-- MAIN HEADER -->
        <?php include_once('header.php'); ?>

        <!-- SIDEBAR -->
        <?php
        $paginaActual = 'inicio';
        include_once('sidebar.php');
        ?>

        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">Bienvenidos!</h4>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    Estamos desarrollando el Primer desempeño! Ingresa al menu de la izquierda para ir al Listado de Viajes.
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
