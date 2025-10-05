<?php
require_once 'funciones/funciones.inc.php';
require_once 'funciones/validaciones.inc.php';

require_once 'header.inc.php';
?>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <?php require_once 'bandas_superiores.inc.php'; ?>

            <div class="navbar-default sidebar" role="navigation">
                <?php require_once 'menu.inc.php'; ?>
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Formularios y variables con POST</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Recordamos los valores ingresados en una calculadora [POST]
                        </div>

                        <div class="panel-body">
                            <?php
                            //pregunto si el boton viene pulsado
                            if (!empty($_POST['Operar'])) {
                                
                                //primero voy a validar que sean numeros enviados
                                //la funcion devolvera el mensaje a mostrar en caso de haber error
                                $MensajeError = ValidarControles();
                                
                                if (!empty($MensajeError)) {
                                    //si contiene valor el mensaje, es porque hubo errores
                                    //debo mostrar la seccion de error  y no calcular ?>
                                    <div class="alert alert-danger">
                                        <strong>Atención:</strong> <br />
                                        <?php echo $MensajeError; ?>
                                    </div>
                                    
                                        <?php 
                                
                                } else {
                                    //si el mensaje esta vacio es porque esta todo ok
                                    //voy a calcular y mostrar la seccion del resultado
                                    $CalculoRealizado = Operar($_POST['Numero1'], $_POST['Numero2'], $_POST['Operacion']);
                                    ?>
                                    <div class="alert alert-info">
                                        El resultado es <strong><?php echo $CalculoRealizado; ?></strong>
                                    </div>
                                    <?php
                                } 
                             } //fin pregunta del boton si viene pulsado
                                ?>                          


                                <form role="form" method="post" >
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <!-- seccion central izquierda -->
                                            <div class="form-group">
                                                <label>Ingresa el primer número</label>
                                                <input  class="form-control" 
                                                        type="text" 
                                                        name="Numero1" 
                                                        value="<?php if (!empty($_POST['Numero1'])){echo $_POST['Numero1'];} ?>" >                                           
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Ingresa el 2do número</label>
                                                <input  class="form-control" 
                                                        type="text" 
                                                        name="Numero2" 
                                                       value="<?php if (!empty($_POST['Numero1'])){echo $_POST['Numero1'];} ?>" >
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Elige la operación</label>
                                                <select class="form-control" name="Operacion">
                                                    <option value="">Elige la operacion</option>
                                                    <option value="1"
                                                            <?php 
                                                            if (!empty($_POST['Operacion']) && $_POST['Operacion']==1) {
                                                                echo 'selected'; 
                                                            } ?>
                                                            >Deseo sumar ambos nros</option>
                                                    
                                                    <option value="2"
                                                            <?php 
                                                            if (!empty($_POST['Operacion']) && $_POST['Operacion']==2) {
                                                                echo 'selected'; 
                                                            } ?>
                                                            >Deseo restar ambos nros</option>
                                                    
                                                    <option value="3"
                                                            <?php 
                                                            if (!empty($_POST['Operacion']) && $_POST['Operacion']==3) {
                                                                echo 'selected'; 
                                                            } ?>
                                                            >Deseo multiplicar ambos nros</option>
                                                    
                                                    <option value="4" 
                                                            <?php 
                                                            if (!empty($_POST['Operacion']) && $_POST['Operacion']==4) {
                                                                echo 'selected'; 
                                                            } ?>
                                                            >Deseo dividir ambos nros</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-default" name="Operar" value="Enviar">Calcular resultado</button>
                                        </div>
                                        <div class="col-lg-6">
                                            <img src="dist/img/operadores.png" />
                                        </div>
                                    </div>
                                </form>
                                <?php print_r($_POST); ?>
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




        