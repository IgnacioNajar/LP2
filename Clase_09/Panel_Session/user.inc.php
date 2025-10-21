<div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                   Usuario: <?php echo $_SESSION['Usuario_Nombre'].' '. $_SESSION['Usuario_Apellido'] ; ?> 
                </a>
            </div>
            <!-- /.navbar-header -->


            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"> - Nivel : <?php echo $_SESSION['Usuario_NombreNivel'];  ?></a>
            </div>
            <!-- /.navbar-header -->

<ul class="nav navbar-top-links navbar-right">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="misdatos.php"><i class="fa fa-user fa-fw"></i> Mis datos</a>
                        </li>
                       
                        <li class="divider"></li>
                        <li><a href="cerrarsesion.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>    
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
</ul>