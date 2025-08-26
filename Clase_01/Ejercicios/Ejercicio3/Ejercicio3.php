<?php
define('Titulo', 'Destinos Turisticos');

// Destino 1
$NombreDestino1 = 'Playa Paraíso';
$DescripcionDestino1 = 'Un rincón ideal para desconectarse, disfrutar del sol y dar un paseo en bote entre aguas tranquilas.';
$RutaImg1 = 'images/imagen1.jpg';
$Precio1 = 850;
$CantidadCuotas1 = 5;
$PrecioCuota1 = $Precio1 / $CantidadCuotas1;

// Destino 2
$NombreDestino2 = 'Costa de Chozas';
$DescripcionDestino2 = 'Una playa perfecta para compartir con amigos, descansar bajo las chozas y vivir un día inolvidable junto al mar.';
$RutaImg2 = 'images/imagen2.jpg';
$Precio2 = 1200;
$CantidadCuotas2 = 6;
$PrecioCuota2 = $Precio2 / $CantidadCuotas2;

// Destino 3
$NombreDestino3 = 'Muelle de Aguas Cristalinas';
$DescripcionDestino3 = 'Sumergite en la magia del Caribe: aguas turquesa, brisa marina y un paseo en barco que nunca olvidarás.';
$RutaImg3 = 'images/imagen3.jpg';
$Precio3 = 1500;
$CantidadCuotas3 = 10;
$PrecioCuota3 = $Precio3 / $CantidadCuotas3;


/*
Usar el Ejemplo 9 como guia para la resolucion.
1)	Mantener la estructura brindada de 3 elementos principales.
2)	Estos 3 elementos seran destinos turisticos, pudiendo repetir la informacion del ejercicio 2, pero agregando la informacion necesaria como Precio y Cuotas.
3)	Usar variables y constantes donde consideren necesario.
4)	Usar distintas imagenes donde consideren.

*/
?>

<!DOCTYPE html>

<html class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
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
            <ul class="thumbnails">
                <li class="span4">
                    <div class="thumbnail">
                        <img src="<?php echo $RutaImg1; ?>" alt="">

                        <div class="caption">
                            <h3><?php echo $NombreDestino1; ?></h3>

                            <p><?php echo $DescripcionDestino1; ?></p>
                            <h4>Precio: $ <?php echo $Precio1; ?></h4>
                            <p><strong><?php echo $CantidadCuotas1; ?> </strong> cuotas de <strong>$ <?php echo $PrecioCuota1; ?></strong></p>
                            <p>
                                <a href="#" class="btn btn-primary">Comprar</a>
                                <a href="#" class="btn">Ver detalles</a>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="span4">
                    <div class="thumbnail">
                        <img src="<?php echo $RutaImg2; ?>" alt="">

                        <div class="caption">
                            <h3><?php echo $NombreDestino2; ?></h3>

                            <p><?php echo $DescripcionDestino2; ?></p>
                            <h4>Precio: $ <?php echo $Precio2; ?></h4>
                            <p><strong><?php echo $CantidadCuotas2; ?> </strong> cuotas de <strong>$ <?php echo $PrecioCuota2; ?></strong></p>
                            <p>
                                <a href="#" class="btn btn-primary">Comprar</a>
                                <a href="#" class="btn">Ver detalles</a>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="span4">
                    <div class="thumbnail">
                        <img src="<?php echo $RutaImg3; ?>" alt="">

                        <div class="caption">
                            <h3><?php echo $NombreDestino3; ?></h3>
                            <p><?php echo $DescripcionDestino3; ?></p>
                            <h4>Precio: $ <?php echo $Precio3; ?></h4>
                            <p><strong><?php echo $CantidadCuotas3; ?> </strong> cuotas de <strong>$ <?php echo $PrecioCuota3; ?></strong></p>
                            <p>
                                <a href="#" class="btn btn-primary">Comprar</a>
                                <a href="#" class="btn">Ver detalles</a>
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <hr />

        <footer align="center">
            <p>Programación con <strong>PHP</strong></p>
        </footer>


    </body>
</html>
