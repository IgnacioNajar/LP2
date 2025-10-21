<?php
require_once 'header.inc.php';
require_once 'funciones/validaciones_tarea4.php';
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
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a></li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <?php require_once 'menu.inc.php'; ?>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Ejemplo Formulario de Registración</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Elementos básicos para una Registración:</div>
                        <div class="panel-body">

                            <?php
                            if (isset($_POST['BotonRegistrar'])) {
                                $MensajeError = validarCampos();

                                if (!empty($MensajeError)) { ?>
                                    <div class="alert alert-danger">
                                        <strong>Atención:</strong>
                                        <br>
                                        <?= $MensajeError; ?>
                                    </div>
                                <?php } else { ?>
                                    <div class="alert alert-success">
                                        <strong>El registro fue exitoso</strong>
                                    </div>
                                    <?php $_POST = []; ?>
                            <?php } } ?>

                            <form role="form" action="Tarea4.php" method="post">
                                <div class="row">
                                    <div class="col-lg-4" style="text-align: center;">
                                        <img src="dist/img/register.png" />
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nombre:</label>
                                            <input class="form-control" type="text" name="Nombre" id="nombre"
                                                value="<?= isset($_POST['Nombre']) ? htmlspecialchars(trim($_POST['Nombre'])) : '' ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Apellido:</label>
                                            <input class="form-control" type="text" name="Apellido" id="apellido"
                                                value="<?= isset($_POST['Apellido']) ? htmlspecialchars(trim($_POST['Apellido'])) : '' ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input class="form-control" type="text" name="Email" id="email"
                                                value="<?= isset($_POST['Email']) ? htmlspecialchars(trim($_POST['Email'])) : '' ?>" >
                                        </div>

                                        <div class="form-group">
                                            <label>Clave:</label>
                                            <input class="form-control" type="password" name="Password" id="password" value="" >
                                        </div>

                                        <div class="form-group">
                                            <label>Reingrese la clave:</label>
                                            <input class="form-control" type="password" name="PasswordReingresada" id="passwordreingresada" value="" >
                                        </div>

                                        <div class="form-group">
                                            <label>Pais:</label>
                                            <select class="form-control" name="Pais" id="pais">
                                                <option value="">Selecciona...</option>
                                                <option value="ARG" <?= (isset($_POST['Pais']) && $_POST['Pais'] == 'ARG') ? 'selected' : '' ?>>Argentina</option>
                                                <option value="BRA" <?= (isset($_POST['Pais']) && $_POST['Pais'] == 'BRA') ? 'selected' : '' ?>>Brasil</option>
                                                <option value="CHI" <?= (isset($_POST['Pais']) && $_POST['Pais'] == 'CHI') ? 'selected' : '' ?>>Chile</option>
                                                <option value="URU" <?= (isset($_POST['Pais']) && $_POST['Pais'] == 'URU') ? 'selected' : '' ?>>Uruguay</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Consulta:</label>
                                            <textarea class="form-control" rows="5" cols="40" name="Consulta" id="consulta"><?= isset($_POST['Consulta']) ? htmlspecialchars(trim($_POST['Consulta'])) : '' ?></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Sexo:</label><br>
                                            <label class="radio-inline">
                                                <input type="radio" name="Sexo" id="SexoF" value="F"
                                                    <?= (isset($_POST['Sexo']) && $_POST['Sexo'] == 'F') ? 'checked' : '' ?>> Femenino
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="Sexo" id="SexoM" value="M"
                                                    <?= (isset($_POST['Sexo']) && $_POST['Sexo'] == 'M') ? 'checked' : '' ?>> Masculino
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="Sexo" id="SexoO" value="O"
                                                    <?= (isset($_POST['Sexo']) && $_POST['Sexo'] == 'O') ? 'checked' : '' ?>> Otro
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label>Condiciones del sitio:</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="Condiciones" value="SI"
                                                        <?= (isset($_POST['Condiciones']) && $_POST['Condiciones'] == 'SI') ? 'checked' : '' ?>> Acepto los T&eacute;rminos y Condiciones
                                                </label>
                                            </div>

                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="Suscripcion" value="SI"
                                                        <?= (isset($_POST['Suscripcion']) && $_POST['Suscripcion'] == 'SI') ? 'checked' : '' ?>> Deseo suscribirme al Newsletter
                                                </label>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-default" value="Registrar" name="BotonRegistrar">Registrarme</button>
                                        o <a href="index.php">Volver al inicio</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require_once 'footer.inc.php'; ?>
