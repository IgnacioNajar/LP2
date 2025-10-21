<?php
session_start();

// Redirige al login si no hay sesión activa
if (empty($_SESSION['Usuario_Nombre'])) {
    header('Location: cerrarsesion.php');
    exit;
}

require_once 'funciones/conexion.php';
require_once 'funciones/select_usuarios.php';
require_once 'funciones/select_paises.php';
require_once 'funciones/select_niveles.php';

$MiConexion = ConexionBD();

// Contamos registros usando tus funciones
$totalUsuarios = count(Listar_Usuarios($MiConexion));
$totalPaises   = count(Listar_Paises($MiConexion));
$totalNiveles  = count(Listar_Niveles($MiConexion));

require_once 'header.inc.php';
?>

</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <?php require_once 'user.inc.php'; ?>
        <?php require_once 'menu.inc.php'; ?>
    </nav>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Panel - Bienvenid@ <?php echo htmlspecialchars($_SESSION['Usuario_Nombre']); ?>!</h1>
            </div>
        </div>

        <div class="row">
            <!-- Usuarios -->
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3"><i class="fa fa-user fa-5x"></i></div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo $totalUsuarios; ?></div>
                                <div>Usuarios registrados</div>
                            </div>
                        </div>
                    </div>
                    <a href="listado_usuarios.php">
                        <div class="panel-footer">
                            <span class="pull-left">Ver Listado</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Países -->
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3"><i class="fa fa-flag-o fa-5x"></i></div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo $totalPaises; ?></div>
                                <div>Paises cargados</div>
                            </div>
                        </div>
                    </div>
                    <a href="listado_paises1.php">
                        <div class="panel-footer">
                            <span class="pull-left">Ver Listado</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Niveles -->
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3"><i class="fa fa-support fa-5x"></i></div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo $totalNiveles; ?></div>
                                <div>Niveles cargados</div>
                            </div>
                        </div>
                    </div>
                    <a href="listado_niveles1.php">
                        <div class="panel-footer">
                            <span class="pull-left">Ver Listado</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php require_once 'footer.inc.php'; ?>
