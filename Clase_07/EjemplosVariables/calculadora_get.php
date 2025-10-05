<?php 
require_once 'funciones/funciones.inc.php'; 

require_once 'header.inc.php'; ?>

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
                    <h1 class="page-header">Formularios y variables</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Operamos con variables en una calculadora [GET]
                        </div>
                        
                        <div class="panel-body">
                            <?php 
                            //pregunto si el boton viene pulsado
                            if (!empty($_GET['Operar'])) {
                                //si viene pulsado, voy a calcular y mostrar la seccion del resultado
                                $CalculoRealizado=  Operar($_GET['Numero1'], $_GET['Numero2'], $_GET['Operacion']);                                             
                            ?>
                            <div class="alert alert-info">
                                El resultado es <strong><?php echo $CalculoRealizado; ?></strong>
                            </div>
                            <?php 
                            } ?>
                            
                            <form role="form" method="get" >
                                <div class="row">
                                    <div class="col-lg-3">
                                        <!-- seccion central izquierda -->
                                        <div class="form-group">
                                            <label>Ingresa el primer n&uacute;mero</label>
                                            <input class="form-control" type="text" name="Numero1" >
                                        </div>
                                        <div class="form-group">
                                            <label>Ingresa el 2do n&uacute;mero</label>
                                            <input class="form-control" type="text" name="Numero2">                                                                                  
                                        </div>
                                        <div class="form-group">
                                            <label>Elige la operaci&oacute;n</label>
                                            <select class="form-control" name="Operacion">
                                                <option>Elige la operacion</option>
                                                <option value="1">Deseo sumar ambos nros</option>
                                                <option value="2">Deseo restar ambos nros</option>
                                                <option value="3">Deseo multiplicar ambos nros</option>
                                                <option value="4">Deseo dividir ambos nros</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-default" name="Operar" value="Enviar">
                                            Calcular resultado</button>                                 
                                    </div>
                                    <div class="col-lg-6">
                                        <img src="dist/img/operadores.png" />
                                    </div>
                                </div>
                            </form>
                            <?php print_r($_GET); ?>
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