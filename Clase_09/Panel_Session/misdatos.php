<?php
session_start();

// Redirige al login si no hay sesión activa
if (empty($_SESSION['Usuario_Nombre'])) {
    header('Location: cerrarsesion.php');
    exit;
}

// Obtenemos los datos del usuario desde la sesión
$usuario = [
    'Nombre'       => $_SESSION['Usuario_Nombre'] ?? '',
    'Apellido'     => $_SESSION['Usuario_Apellido'] ?? '',
    'Email'        => $_SESSION['Usuario_Email'] ?? 'No disponible',
    'Nivel'        => $_SESSION['Usuario_Nivel'] ?? '',
    'Imagen'       => $_SESSION['Usuario_Img'] ?? 'dist/img/default-user.png',
    'Saludo'       => $_SESSION['Usuario_Saludo'] ?? '',
    'NombreNivel'  => $_SESSION['Usuario_NombreNivel'] ?? ''
];

require_once 'header.inc.php';
?>

</head>
<body>
<div id="wrapper">

    <!-- Navbar superior -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <?php require_once 'user.inc.php'; ?>
        <?php require_once 'menu.inc.php'; ?>
    </nav>

    <!-- Contenido principal -->
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Mis Datos</h1>
            </div>
        </div>

        <div class="row">
            <!-- Panel de perfil -->
            <div class="col-lg-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Perfil de Usuario
                    </div>
                    <div class="panel-body text-center">
                        <img src="<?php echo htmlspecialchars($usuario['Imagen']); ?>" class="img-thumbnail" alt="Usuario" style="max-width:150px;">
                        <h3><?php echo htmlspecialchars($usuario['Nombre'] . ' ' . $usuario['Apellido']); ?></h3>
                        <p><?php echo htmlspecialchars($usuario['Saludo']); ?></p>
                        <p><strong>Nivel:</strong> <?php echo htmlspecialchars($usuario['NombreNivel']); ?></p>
                    </div>
                </div>
            </div>

            <!-- Panel de detalles -->
            <div class="col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading">Detalles</div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Nombre</th>
                                <td><?php echo htmlspecialchars($usuario['Nombre']); ?></td>
                            </tr>
                            <tr>
                                <th>Apellido</th>
                                <td><?php echo htmlspecialchars($usuario['Apellido']); ?></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><?php echo htmlspecialchars($usuario['Email']); ?></td>
                            </tr>
                            <tr>
                                <th>Nivel</th>
                                <td><?php echo htmlspecialchars($usuario['NombreNivel']); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'footer.inc.php'; ?>
