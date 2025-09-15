<?php
$TituloPagina = "Listado de Articulos - VendoTutti.com";

$Producto1 = "LED SAMSUNG 24";
$Imagen1 = "televisor_lcd.jpg";
$DescripcionProducto1 = 'El monitor perfecto sirve tambien como el televisor personal perfecto: puedes mirar programas de television increiblemente envolventes y trabajar, todo en un unico y excelente dispositivo. Te permite de manera fácil y rápida alternar su uso como TV o como monitor de PC, o incluso ver ambos al mismo tiempo en una pantalla dividida.';
$Precio1 = 3999;
$CantidadCuotas1 = 6;   
$PrecioCuota1 = 666.50;

$Producto2 = "CELULAR LIBRE SAMSUNG GALAXY J2 WHITE";
$Imagen2 = "celular.jpg";
$DescripcionProducto2 = 'La pantalla mas nitida y sorprendente de su clase, con Corning Gorilla Glass y resistente contra salpicaduras de agua. Incluye Android Lollipop, batería que dura todo el día y Motorola Shells, para que lo adaptes a tu estilo personal.';
$Precio2 = 3499;
$CantidadCuotas2 = 6;
$PrecioCuota2 = 583.16;   

$Producto3 = "IMPRESORA LASER BROTHER HL-1212W";
$Imagen3 = "impresora.jpg";
$DescripcionProducto3 = 'Imprime hasta 21 ppm con rapidez, es facil de usar en una red inalambrica y permite imprimir desde dispositivos moviles via Brother iPrint&Scan.';
$Precio3 = 1499;
$CantidadCuotas3 = 6;
$PrecioCuota3 = 249.83;
?>

<!DOCTYPE html>

<html class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8"/> 
        <title><?php echo $TituloPagina; ?></title>
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
                        <span class="brand"><?php echo $TituloPagina; ?></span>
                    </div>
                </div>
            </div>
        </div>




        <div class="row-fluid">
            <ul class="thumbnails">
                <li class="span4">
                    <div class="thumbnail">
                        <img src="images/<?php echo $Imagen1; ?>" alt="">

                        <div class="caption">
                            <h3><?php echo $Producto1; ?></h3>

                            <p><?php echo $DescripcionProducto1; ?></p>
                            <h4>Precio: $ <?php echo $Precio1; ?></h4>
                            <p><strong><?php echo $CantidadCuotas1 ; ?></strong> cuotas de <strong>$ <?php echo $PrecioCuota1; ?></strong></p>
                            <p>
                                <a href="#" class="btn btn-primary">Comprar</a> 
                                <a href="#" class="btn">Ver detalles</a>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="span4">
                    <div class="thumbnail">
                        <img src="images/<?php echo $Imagen2; ?>" alt="">

                        <div class="caption">
                            <h3><?php echo $Producto2; ?></h3>

                            <p><?php echo $DescripcionProducto2; ?></p>
                            <h4>Precio: $ <?php echo $Precio2; ?></h4>
                            <p><strong><?php echo $CantidadCuotas2 ; ?></strong> cuotas de <strong>$ <?php echo $PrecioCuota2; ?></strong></p>
                            <p>
                                <a href="#" class="btn btn-primary">Comprar</a> 
                                <a href="#" class="btn">Ver detalles</a>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="span4">
                    <div class="thumbnail">
                        <img src="images/<?php echo $Imagen3; ?>" alt="">

                        <div class="caption">
                            <h3><?php echo $Producto3; ?></h3>
                            <p><?php echo $DescripcionProducto3; ?></p>
                            <h4>Precio: $ <?php echo $Precio3; ?></h4>
                            <p><strong><?php echo $CantidadCuotas3 ; ?></strong> cuotas de <strong>$ <?php echo $PrecioCuota3; ?></strong></p>
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
            <p>Programaci&oacute;n con <strong>PHP</strong></p>
        </footer>


    </body>
</html>
