<?php require_once 'header.inc.php'; ?>           

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
                    <h1 class="page-header">Tarea 2: Formulario de login</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ejemplo Formulario de Login
                        </div>
                        <div class="panel-body">
                            
                            <form role="form" >
                                <div class="row">
                                    <div class="col-lg-4" style="text-align: left;">
                                        <img src="dist/img/login.png" />
                                    </div>
                                    <div class="col-lg-6">
                                        <!-- seccion central  -->
                                        
                                        <div class="form-group">
                                            <label>Ingresa tu login</label>
                                            <input class="form-control" />
                                        </div>

                                        <div class="form-group">
                                            <label>Ingresa tu clave</label>
                                            <input class="form-control" />
                                        </div>

                                        <button  class="btn btn-default">Ingresa</button>

                                    </div>
                                    
                                    <!-- /.col-lg-6 (nested) -->
                                </div>


                            </form>
                                                                   
 <?php print_r($_POST); ?>

                            <hr />
                            Para registrarte <a href="Ejemplo1.php">ingresa aqui</a>
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