<?php
session_start();

// Redirige al login si no hay sesión activa
if (empty($_SESSION['Usuario_Nombre'])) {
    header('Location: cerrarsesion.php');
    exit;
}

require_once 'funciones/conexion.php';
require_once 'funciones/insertar_nivel.php';

$MiConexion = ConexionBD();
$Mensaje = '';
$Estilo = 'warning'; // default

// Procesar formulario
if (isset($_POST['BotonRegistrar'])) {
    $resultado = InsertarNivel($MiConexion); // Tu función lee $_POST['Nombre']
    $Mensaje = $resultado['mensaje'];
    $Estilo = $resultado['success'] ? 'success' : 'danger';
}

require_once 'header.inc.php';
?>

</head>
<body>

<div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Página inicial</a>
        </div>
        <?php require_once 'user.inc.php'; ?>
        <?php require_once 'menu.inc.php'; ?>
    </nav>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Formulario de Registro de Nuevo Nivel</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">Ingresa datos del nuevo nivel</div>
                    <div class="panel-body">

                        <?php if (!empty($Mensaje)) { ?>
                            <div class="alert alert-<?php echo $Estilo; ?> alert-dismissable">
                                <?php echo htmlspecialchars($Mensaje, ENT_QUOTES); ?>
                            </div>
                        <?php } ?>

                        <form role="form" method="post">
                            <div class="form-group">
                                <label>Nombre:</label>
                                <input class="form-control" type="text" name="Nombre"
                                       value="<?php echo htmlspecialchars($_POST['Nombre'] ?? '', ENT_QUOTES); ?>" required>
                            </div>
                            <button type="submit" class="btn btn-default" name="BotonRegistrar">
                                Registrar
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'footer.inc.php'; ?>
