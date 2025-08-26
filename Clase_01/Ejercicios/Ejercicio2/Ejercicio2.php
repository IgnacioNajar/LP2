<?php
define('Titulo', 'Destinos Turisticos');

// Destino 1
$NombreDestino1 = 'Playa Paraíso';
$DescripcionDestino1 = 'Un rincón ideal para desconectarse, disfrutar del sol y dar un paseo en bote entre aguas tranquilas.';
$RutaImg1 = 'images/imagen1.jpg';

// Destino 2
$NombreDestino2 = 'Costa de Chozas';
$DescripcionDestino2 = 'Una playa perfecta para compartir con amigos, descansar bajo las chozas y vivir un día inolvidable junto al mar.';
$RutaImg2 = 'images/imagen2.jpg';

// Destino 3
$NombreDestino3 = 'Muelle de Aguas Cristalinas';
$DescripcionDestino3 = 'Sumergite en la magia del Caribe: aguas turquesa, brisa marina y un paseo en barco que nunca olvidarás.';
$RutaImg3 = 'images/imagen3.jpg';

/*
Usar el Ejemplo 8 como guia para la resolucion.

1)	Codificar lo necesario para que ahora este Ejercicio 2, muestre informacion de distintos Destinos Turisticos.
2)	Usar variables y constantes donde consideren necesario.
3)	Usar distintas imagenes donde consideren.

*/
?>

<!DOCTYPE html>

<html class="no-js">
    <head>
        <meta http-equiv="Content-Type" />
        <title><?php echo Titulo; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/main.css">

    </head>
    <body>

        <div class="navbar navbar-fixed-top">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="container-fluid">
                        <span class="brand"><?php echo Titulo; ?></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row-fluid">
            <br />

            <div class="span10 pull-left">

                <div class="well">
                    <h2><?php echo $NombreDestino1; ?></h2>

                    <p>
                        <?php echo $DescripcionDestino1; ?><br /><br />
                        <img src="<?php echo $RutaImg1; ?>" width="200px" /><br /><br />
                    </p>
                </div>

            </div>


            <div class="span10 pull-left">
                <div class="span10 pull-left">

                    <div class="well">
                        <h2><?php echo $NombreDestino2; ?></h2>

                        <p>
                            <?php echo $DescripcionDestino2; ?><br /><br />
                            <img src="<?php echo $RutaImg2; ?>" width="200px" /><br /><br />
                        </p>
                    </div>

                </div>



            </div>


            <div class="span10 pull-left">
                <div class="span10 pull-left">

                    <div class="well">
                        <h2><?php echo $NombreDestino3; ?></h2>

                        <p>
                            <?php echo $DescripcionDestino3; ?><br /><br />
                            <img src="<?php echo $RutaImg3; ?>" width="200px" /><br /><br />
                        </p>
                    </div>

                </div>
            </div>

        </div>
        <!--/row-fluid-->

        <hr>

        <footer align="center">
            <p>Programacion con <strong>PHP</strong></p>
        </footer>


    </body>
</html>
