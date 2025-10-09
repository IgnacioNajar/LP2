<?php
require_once 'header.inc.php';

$MensajeError = '';
$MensajeOk = '';

if (isset($_POST['BotonRegistrar'])) {
    $nombre = trim($_POST['Nombre']) ?? '';
    $apellido = trim($_POST['Apellido']) ?? '';
    $email = trim($_POST['Email']) ?? '';

    if (empty($nombre)) {
        $MensajeError .= "Por favor, ingrese su nombre. <br>";
    } elseif (strlen($nombre) <= 3) {
        $MensajeError .= "El nombre debe tener al menos 3 caracteres. <br>";
    }

    if (empty($apellido)) {
        $MensajeError .= "Por favor, ingrese su apellido. <br>";
    } elseif (strlen($apellido) <= 3) {
        $MensajeError .= "El apellido debe tener al menos 3 caracteres. <br>";
    }

    if (empty($email)) {
        $MensajeError .= "Por favor, ingrese su email. <br>";
    } elseif (strlen($email) <= 3) {
        $MensajeError .= "El email debe tener al menos 3 caracteres. <br>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $MensajeError .= "El email no es valido. <br>";
    }

    if (empty($MensajeError)) {

        if (!is_dir('logs')) {
            mkdir('logs');
            chmod('logs', 0777);
        }

        $csvFile = 'logs/registro_accesos.csv';
        $archivoLog = fopen($csvFile, 'a+');

        if (filesize($csvFile) === 0) {
            // archivo vacío, escribimos encabezado
            $header = "Fecha y hora actual | Valor del apellido | Valor del nombre | Email\n";
            fwrite($archivoLog, $header);
        }
        
        $dateTime = date('d/m/Y H:i:s');
        $textoLog = "$dateTime | $apellido | $nombre | $email\n";
        fwrite($archivoLog, $textoLog);
        fclose($archivoLog);

        $MensajeOk .= "<strong>Registro correcto!.</strong> [Log de registros <a href='$csvFile' target='_blank'>aqui</a>] ";
    }
}
?>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Pagina inicial</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <?php require_once 'menu.inc.php'; ?>
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tarea 1: Escribir archivo con datos del Formulario</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Se debe escribir un log con los datos del navegante.
                        </div>
                        <div class="panel-body">
                            <form role="form" action="Tarea1.php" method="post">

                                <div class="row">
                                    <div class="col-lg-4" style="text-align: center;">
                                        <img src="dist/img/register.png" />
                                        <br />
                                        <pre style="text-align: left;">
                                            <?php
                                            print_r($_POST); ?>
                                        </pre>
                                    </div>
                                    <div class="col-lg-6">
                                        <!-- seccion central izquierda -->
                                        <?php if (!empty($MensajeError)): ?>
                                            <div class="alert alert-danger">
                                                <strong>Atención:</strong>
                                                <br>
                                                <?= $MensajeError; ?>
                                            </div>
                                        <?php endif; ?>

                                        <?php if (!empty($MensajeOk)): ?>
                                            <div class="alert alert-success">
                                                <?= $MensajeOk; ?>
                                            </div>
                                        <?php endif; ?>

                                        <div class="form-group">
                                            <label>Nombre:</label>
                                            <input class="form-control" type="text" name="Nombre" id="nombre"
                                                value="<?= isset($nombre) ? htmlspecialchars($nombre) : '' ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Apellido:</label>
                                            <input class="form-control" type="text" name="Apellido" id="apellido"
                                                value="<?= isset($apellido) ? htmlspecialchars($apellido) : '' ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input class="form-control" type="text" name="Email" id="email"
                                                value="<?= isset($email) ? htmlspecialchars($email) : '' ?>">
                                        </div>

                                        <button class="btn btn-default" type="submit" id="botonRegistrar" name="BotonRegistrar"
                                            value="Registrar">Registrarme</button>
                                        o <a href="index.php">Volver al inicio</a>
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                            </form>

                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <?php require_once 'footer.inc.php'; ?>
