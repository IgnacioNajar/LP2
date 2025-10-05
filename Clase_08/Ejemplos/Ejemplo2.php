<?php
//el usuario es alumno
//la clave es IssD_2000

$MensajeOk = '';
$MensajeError = '';

if (!empty($_POST['Ingresar'])) {
    //esto va a ejecutar cuando el boton llegue con valor, es decir se haya pulsado    
    //validacion de la caja de texto del Login
    if (strlen($_POST['Login']) < 3) {
        $MensajeError = "Debe ingresar un Login. <br />";
    } else if (empty($_POST['Clave'])) {
        //validacion de la caja del Password
        $MensajeError = "Debe ingresar su Clave. <br />";
    } else {
        //ambos campos llegan hasta aqui con valores ingresados
        //ahora hay q validar si esos valores corresponden al usuario y clave
        
        
        //variables a utilizar
        $FechaHoy = date('Ymd');
        $FechaHoraHoy = date('Y-m-d H:i:s');
         //creo la carpeta de logs, donde voy a crear mi archivo

        if (!is_dir('logs')) {     //pregunto si no existe el directorio "logs"
            mkdir('logs');         //si no existe, lo creo
            chmod('logs', 0777);   //le doy permisos de lectura/escritura
        }
        
        if ($_POST['Login']=='alumno' && $_POST['Clave']=='Alu_ISSD') {
            //ambos datos ingresados son correctos -> guardar log de acceso
            //escribo log de acceso
            $TextoLog = "$FechaHoraHoy : logs/access {$_POST['Login']}  \n"; //mensaje
            $ArchivoLog = fopen("logs/access_$FechaHoy.log", 'a+');
            fwrite($ArchivoLog, $TextoLog);
            fclose($ArchivoLog);
            $MensajeOk = "<strong>Acceso Correcto!.</strong> [Log de accesos <a href='logs/access_$FechaHoy.log' target='_blank'>aqui</a>] ";
            
        }else {
            //algun dato es incorrecto -> log de error
            //escribo log de acceso
            $TextoLog = "$FechaHoraHoy : error de acceso usando este login: {$_POST['Login']}  \n"; //mensaje
            $ArchivoLog = fopen("logs/error_$FechaHoy.log", 'a+');
            fwrite($ArchivoLog, $TextoLog);
            fclose($ArchivoLog);
            $MensajeError= "<strong>Los datos son incorrectos.</strong> [Log de errores <a href='logs/error_$FechaHoy.log' target='_blank'>aqui</a>] ";
        }
        
        
        
    }
}

require_once 'header.inc.php';
?>

</head>

<body>

    <div id="wrapper">  

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <?php require_once 'superior.inc.php'; ?>

            <div class="navbar-default sidebar" role="navigation">
                <?php require_once 'menu.inc.php'; ?>
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Formulario de login - Proceso Validación de acceso</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ejemplo de Formulario de Login, debiendo ingresar el usuario y clave correctos [datos estáticos]. 
                            <br />
                            Cuando ingresa bien, genera el log de acceso. Sino genera el log de error.
                        </div>
                        <div class="panel-body">

                            <form role="form" method="post" >
                                <div class="row">
                                    <div class="col-lg-4" style="text-align: left;">
                                        <img src="dist/img/login2.png" class="img-thumbnail"  />
                                    </div>
                                    <div class="col-lg-6">
                                        <!-- seccion central  -->
                                        
                                        <?php if (!empty($MensajeError)) { ?>
                                        <div class="alert alert-warning">
                                            <?php echo $MensajeError; ?>
                                        </div>
                                        <?php } ?>
                                        
                                        <?php if (!empty($MensajeOk)) { ?>
                                        <div class="alert alert-success">
                                            <?php echo $MensajeOk; ?>
                                        </div>
                                        <?php } ?>
                                        
                                        <div class="form-group">
                                            <label>Ingresa tu login</label>
                                            <input class="form-control" type="text" name="Login" value="<?php echo !empty($_POST['Login']) ? $_POST['Login'] : ''; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Ingresa tu clave</label>
                                            <input class="form-control" type="password" name="Clave"  />
                                        </div>

                                        <button type="submit" name="Ingresar" value="Ingresar"  class="btn btn-default">Ingresa</button>

                                    </div>

                                    <!-- /.col-lg-6 (nested) -->
                                </div>


                            </form>

<?php print_r($_POST); ?>

                            <hr />
                            <!-- /.row (nested) -->
                        </div>
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