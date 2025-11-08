<?php
session_start();

if (empty($_SESSION['usuario'])) {
    header('Location: functions/cerrar_sesion.php');
    exit;
}

$usuario = $_SESSION['usuario'];
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
            <h1>Perfil de Usuario</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Mis Datos</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Panel de perfil -->
                <div class="col-lg-4">
                    <div class="card info-card">
                        <div class="card-body text-center">
                            <img 
                                src="assets/img/<?= htmlspecialchars($usuario['imagen'] ?? 'profile-img.jpg'); ?>"
                                class="rounded-circle mb-3"
                                alt="Usuario"
                                style="max-width:150px;"
                                onerror="this.onerror=null; this.src='assets/img/profile-img.jpg';"
                            >
                            <h3 style="margin-bottom: 0;"><?= htmlspecialchars($usuario['saludo']); ?></h3>
                            <h2 style="margin-bottom: 0; font-weight: bold;"><?= htmlspecialchars($usuario['nombre'] . ' ' . $usuario['apellido']); ?></h2>
                        </div>
                    </div>
                </div><!-- End Panel de perfil -->

                <!-- Panel de detalles -->
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Detalles de Usuario:</h5>
                            <table class="table table-striped">
                                <tr>
                                    <th>Nombre:</th>
                                    <td><?= htmlspecialchars($usuario['nombre']); ?></td>
                                </tr>
                                <tr>
                                    <th>Apellido:</th>
                                    <td><?= htmlspecialchars($usuario['apellido']); ?></td>
                                </tr>
                                <tr>
                                    <th>DNI:</th>
                                    <td><?= htmlspecialchars($usuario['dni']); ?></td>
                                </tr>
                                <tr>
                                    <th>Usuario:</th>
                                    <td><?= htmlspecialchars($usuario['userName']); ?></td>
                                </tr>
                                <tr>
                                    <th>Sexo:</th>
                                    <td><?= htmlspecialchars($usuario['sexo']); ?></td>
                                </tr>
                                <tr>
                                    <th>Fecha creación:</th>
                                    <td><?= htmlspecialchars($usuario['fechaCreacion']); ?></td>
                                </tr>

                                <tr>
                                    <th>Nivel:</th>
                                    <td><?= htmlspecialchars($usuario['nivelDenominacion']); ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div><!-- End Panel de detalles -->

            </div>
        </section>
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php require_once('footer.php'); ?>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
