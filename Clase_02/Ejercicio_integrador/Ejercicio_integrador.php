<?php
$tipo_destino = 'EUR';
$mes = 12;
define('MENSAJE_LUGARES', 'Hotel Deals'); //Constante para el mensaje de cada lugar

//Se definen los destinos y lugares segun el tipo seleccionado
if ($tipo_destino == 'EXO') { //Destinos Exoticos: 4 lugares
    $nombre_destino = 'Exoticos';
    $cantidad_destinos = 4;

    //Datos del primer lugar
    $titulo_lugar_1 = 'Descubri el Taj Mahal';
    $nombre_lugar_1 = 'India';
    $descripcion_lugar_1 = 'Disfruta el Taj Mahal como nunca antes!';
    $ruta_img_1 = 'images_countries/EXO_india.JPG';
    $precio_lugar_1 = 349.00;
    $cantidad_dias_1 = 7;
    $cantidad_personas_1 = 2;

    //Datos del segundo lugar
    $titulo_lugar_2 = 'Descubri Turquia';
    $nombre_lugar_2 = 'Turquia';
    $descripcion_lugar_2 = 'Disfruta ver obras arquitectonicas como la de la foto!';
    $ruta_img_2 = 'images_countries/EXO_turquia.JPG';
    $precio_lugar_2 = 549.00;
    $cantidad_dias_2 = 3;
    $cantidad_personas_2 = 2;

    //Datos del tercer lugar
    $titulo_lugar_3 = 'Descubri la sabana Sudafrica';
    $nombre_lugar_3 = 'Sudafrica';
    $descripcion_lugar_3 = 'Disfruta de un safari como nunca antes!';
    $ruta_img_3 = 'images_countries/EXO_sudafrica.JPG';
    $precio_lugar_3 = 549.00;
    $cantidad_dias_3 = 3;
    $cantidad_personas_3 = 2;

    //Datos del cuarto lugar
    $titulo_lugar_4 = 'Descubri Tailandia';
    $nombre_lugar_4 = 'Tailandia';
    $descripcion_lugar_4 = 'Disfruta de Tailandia como nunca antes!';
    $ruta_img_4 = 'images_countries/EXO_tailandia.JPG';
    $precio_lugar_4 = 649.00;
    $cantidad_dias_4 = 3;
    $cantidad_personas_4 = 2;

} elseif ($tipo_destino == 'BRA') { //Destinos en Brasil: 3 lugares
    $nombre_destino = 'Brasil';
    $cantidad_destinos = 3;

    //Datos del primer lugar
    $titulo_lugar_1 = 'Descubri Maceio!';
    $nombre_lugar_1 = 'Maceio';
    $descripcion_lugar_1 = 'Disfruta Maceio como nunca antes!';
    $ruta_img_1 = 'images_countries/BRA_maceio.jpg';
    $precio_lugar_1 = 349.00;
    $cantidad_dias_1 = 7;
    $cantidad_personas_1 = 2;

    //Datos del segundo lugar
    $titulo_lugar_2 = 'Descubri Rio de Janeiro';
    $nombre_lugar_2 = 'Rio de Janeiro';
    $descripcion_lugar_2 = 'Disfruta Rio de Janeiro como nunca antes!';
    $ruta_img_2 = 'images_countries/BRA_rio.JPG';
    $precio_lugar_2 = 449.00;
    $cantidad_dias_2 = 10;
    $cantidad_personas_2 = 2;

    //Datos del tercer lugar
    $titulo_lugar_3 = 'Descubri Bahia';
    $nombre_lugar_3 = 'Salvador de Bahia';
    $descripcion_lugar_3 = 'Disfruta Bahia como nunca antes!';
    $ruta_img_3 = 'images_countries/BRA_salvador.JPG';
    $precio_lugar_3 = 549.00;
    $cantidad_dias_3 = 3;
    $cantidad_personas_3 = 2;

} elseif ($tipo_destino == 'EUR') { //Destinos en Europa: 2 lugares
    $nombre_destino = 'Europa';
    $cantidad_destinos = 2;

    //Datos del primer lugar
    $titulo_lugar_1 = 'Descubri Santorini';
    $nombre_lugar_1 = 'Santorini, Grecia';
    $descripcion_lugar_1 = 'Disfruta Santorini y sus aguas como nunca antes!';
    $ruta_img_1 = 'images_countries/EUR_grecia.JPG';
    $precio_lugar_1 = 349.00;
    $cantidad_dias_1 = 7;
    $cantidad_personas_1 = 2;

    //Datos del segundo lugar
    $titulo_lugar_2 = 'Descubri la ciudad de Roma';
    $nombre_lugar_2 = 'Roma, Italia';
    $descripcion_lugar_2 = 'Disfruta la cultura de Italia en su capital como nunca antes!';
    $ruta_img_2 = 'images_countries/EUR_roma.JPG';
    $precio_lugar_2 = 449.00;
    $cantidad_dias_2 = 10;
    $cantidad_personas_2 = 2;

} else { //Destino incorrecto
    $nombre_destino = 'Destino no encontrado';
    $mes = $titulo_lugar_1 = $nombre_lugar_1 = $descripcion_lugar_1 = $ruta_img_1 = '';
    $precio_lugar_1 = $cantidad_dias_1 = $cantidad_destinos = $cantidad_personas_1 = 0;
}

//Se define la temporada segun el mes
switch ($tipo_destino) {
    case 'EXO':
        $temporada = ($mes == 1 || $mes == 2 || $mes == 7 || $mes == 8 || $mes == 12)
            ? 'Temporada alta' : 'Temporada baja';
        break;
    case 'BRA':
        $temporada = ($mes == 1 || $mes == 2 || $mes == 12)
            ? 'Temporada alta' : 'Temporada baja';
        break;
    case 'EUR':
        $temporada = ($mes == 1 || $mes == 2 || $mes == 8 || $mes == 9 || $mes == 12)
            ? 'Temporada alta' : 'Temporada baja';
        break;
    default:
        $temporada = 0;
        break;
}

//Incremento de precio o no, dependiendo de la temporada
$incremento = ($temporada == 'Temporada alta') ? 250.00 : 0;

if ($cantidad_destinos >= 1) $precio_final_1 = $precio_lugar_1 + $incremento;
if ($cantidad_destinos >= 2) $precio_final_2 = $precio_lugar_2 + $incremento;
if ($cantidad_destinos >= 3) $precio_final_3 = $precio_lugar_3 + $incremento;
if ($cantidad_destinos >= 4) $precio_final_4 = $precio_lugar_4 + $incremento;

/* Lo mismo pero con switch
switch ($cantidad_destinos) {
    case 4:
        $precio_final_4 = $precio_lugar_4 + $incremento;
    case 3:
        $precio_final_3 = $precio_lugar_3 + $incremento;
    case 2:
        $precio_final_2 = $precio_lugar_2 + $incremento;
    case 1:
        $precio_final_1 = $precio_lugar_1 + $incremento;
        break;
    default:
        $precio_final_1 = $precio_final_2 = $precio_final_3 = $precio_final_4 = 0;
        break;
}
*/
?>

<!--
/*
Mostrar informacion dinamica, de manera que se vea segun los valores de Destino y Mes que se desea consultar:
//Para destino exoticos: EXO:  Diciembre, Enero, Febrero, Julio y Agosto es Temporada Alta
                                El resto es temporada baja
//Para destino Brasil:  BRA:  Diciembre, Enero, Febrero es T. Alta
                                El resto es temporada baja
//Para destino Europa:  EUR:   Diciembre, Enero, Febrero, Agosto y Sept  es Temporada Alta.
                                El resto es temporada baja
Mostrar las imagenes ubicadas en la carpeta /images segun sea el destino elegido.
*/

Basandote en el ejemplo brindado en: Ejemplos_OperadoresLogicos/Ejemplo5 :
Puedes tomar ese codigo y hacer que esta template mucho mas robusta, tome esos datos y muestre tambien la info.
Aceptas el desafio? Vamos que puedes!
-->

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Travela - Tourism Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 4rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid bg-primary px-5 d-none d-lg-block">
            <div class="row gx-0">
                <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a href="#"><small class="me-3 text-light"><i class="fa fa-user me-2"></i>Register</small></a>
                        <a href="#"><small class="me-3 text-light"><i class="fa fa-sign-in-alt me-2"></i>Login</small></a>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle text-light" data-bs-toggle="dropdown"><small><i class="fa fa-home me-2"></i> My Dashboard</small></a>
                            <div class="dropdown-menu rounded">
                                <a href="#" class="dropdown-item"><i class="fas fa-user-alt me-2"></i> My Profile</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-comment-alt me-2"></i> Inbox</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-bell me-2"></i> Notifications</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-cog me-2"></i> Account Settings</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-power-off me-2"></i> Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="https://themewagon.com/themes/travela/" class="navbar-brand p-0">
                    <h1 class="m-0"><i class="fa fa-map-marker-alt me-3"></i>Travela</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="services.html" class="nav-item nav-link">Services</a>
                        <a href="packages.html" class="nav-item nav-link">Packages</a>
                        <a href="blog.html" class="nav-item nav-link">Blog</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="destination.html" class="dropdown-item">Destination</a>
                                <a href="tour.html" class="dropdown-item">Explore Tour</a>
                                <a href="booking.html" class="dropdown-item">Travel Booking</a>
                                <a href="gallery.html" class="dropdown-item">Our Gallery</a>
                                <a href="guides.html" class="dropdown-item">Travel Guides</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Book Now</a>
                </div>
            </nav>

            <!-- Carousel Start -->
            <div class="carousel-header">
                <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="img/carousel-2.jpg" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Explore The World</h4>
                                    <h2 class="display-2 text-capitalize text-white mb-4">Let's The World Together!</h2>
                                    <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    </p>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="#">Discover Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/carousel-1.jpg" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Explore The World</h4>
                                    <h2 class="display-2 text-capitalize text-white mb-4">Find Your Perfect Tour At Travel</h2>
                                    <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    </p>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="#">Discover Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/carousel-3.jpg" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Explore The World</h4>
                                    <h2 class="display-2 text-capitalize text-white mb-4">You Like To Go?</h2>
                                    <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    </p>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="#">Discover Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon btn bg-primary" aria-hidden="false"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                        <span class="carousel-control-next-icon btn bg-primary" aria-hidden="false"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- Carousel End -->
        </div>
        <div class="container-fluid search-bar position-relative" style="top: -50%; transform: translateY(-50%);">
            <div class="container">
                <div class="position-relative rounded-pill w-100 mx-auto p-5" style="background: rgba(19, 53, 123, 0.8);">
                    <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Eg: Thailand">
                    <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute me-2" style="top: 50%; right: 46px; transform: translateY(-50%);">Search</button>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Packages Start -->
        <div class="container-fluid packages py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3"><?= $nombre_destino; ?></h5>
                    <h2 class="mb-0">Mes: <?= $mes; ?> - <?= $temporada; ?></h2>
                </div>
                <div class="packages-carousel owl-carousel">

                <!-- UN destino o mas-->
                <?php if ($cantidad_destinos >= 1) { ?>
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="<?= $ruta_img_1; ?>" class="img-fluid w-100 rounded-top" alt="Image">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i><?= $nombre_lugar_1; ?></small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i><?= $cantidad_dias_1; ?> days</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i><?= $cantidad_personas_1; ?> Person</small>
                            </div>
                            <div class="packages-price py-2 px-4">$<?= number_format($precio_final_1, 2, '.', ''); ?></div>
                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-0"><?= $titulo_lugar_1; ?></h5>
                                <small class="text-uppercase"><?= MENSAJE_LUGARES; ?></small>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p class="mb-4"><?= $descripcion_lugar_1; ?></p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0">
                                <div class="col-6 text-start px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                                </div>
                                <div class="col-6 text-end px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?> <!-- Finaliza bloque IF PHP -->

                    <!-- DOS destinos o mas-->
                    <?php if ($cantidad_destinos >= 2) { ?>
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="<?= $ruta_img_2; ?>" class="img-fluid w-100 rounded-top" alt="Image">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i><?= $nombre_lugar_2; ?></small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i><?= $cantidad_dias_2; ?> days</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i><?= $cantidad_personas_2; ?> Person</small>
                            </div>
                            <div class="packages-price py-2 px-4">$<?= number_format($precio_final_2, 2, '.', ''); ?></div>
                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-0"><?= $titulo_lugar_2; ?></h5>
                                <small class="text-uppercase"><?= MENSAJE_LUGARES; ?></small>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p class="mb-4"><?= $descripcion_lugar_2; ?></p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0">
                                <div class="col-6 text-start px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                                </div>
                                <div class="col-6 text-end px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?> <!-- Finaliza bloque PHP -->

                    <!-- TRES destinos o mas-->
                    <?php if ($cantidad_destinos >= 3) { ?>
                        <div class="packages-item">
                            <div class="packages-img">
                                <img src="<?= $ruta_img_3; ?>" class="img-fluid w-100 rounded-top" alt="Image">
                                <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i><?= $nombre_lugar_3; ?></small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i><?= $cantidad_dias_3; ?> days</small>
                                    <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i><?= $cantidad_personas_3; ?> Person</small>
                                </div>
                                <div class="packages-price py-2 px-4">$<?= number_format($precio_final_3, 2, '.', ''); ?></div>
                            </div>
                            <div class="packages-content bg-light">
                                <div class="p-4 pb-0">
                                    <h5 class="mb-0"><?= $titulo_lugar_3; ?></h5>
                                    <small class="text-uppercase"><?= MENSAJE_LUGARES; ?></small>
                                    <div class="mb-3">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                    <p class="mb-4"><?= $descripcion_lugar_3; ?></p>
                                </div>
                                <div class="row bg-primary rounded-bottom mx-0">
                                    <div class="col-6 text-start px-0">
                                        <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                                    </div>
                                    <div class="col-6 text-end px-0">
                                        <a href="#" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?> <!-- Finaliza bloque PHP -->

                    <!-- CUATRO destinos o mas-->
                    <?php if ($cantidad_destinos >= 4) { ?>
                        <div class="packages-item">
                            <div class="packages-img">
                                <img src="<?= $ruta_img_4; ?>" class="img-fluid w-100 rounded-top" alt="Image">
                                <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i><?= $nombre_lugar_4; ?></small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i><?= $cantidad_dias_4; ?> days</small>
                                    <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i><?= $cantidad_personas_4; ?> Person</small>
                                </div>
                                <div class="packages-price py-2 px-4">$<?= number_format($precio_final_4, 2, '.', ''); ?></div>
                            </div>
                            <div class="packages-content bg-light">
                                <div class="p-4 pb-0">
                                    <h5 class="mb-0"><?= $titulo_lugar_4; ?></h5>
                                    <small class="text-uppercase"><?= MENSAJE_LUGARES; ?></small>
                                    <div class="mb-3">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                    <p class="mb-4"><?= $descripcion_lugar_4; ?></p>
                                </div>
                                <div class="row bg-primary rounded-bottom mx-0">
                                    <div class="col-6 text-start px-0">
                                        <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                                    </div>
                                    <div class="col-6 text-end px-0">
                                        <a href="#" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?> <!-- Finaliza bloque PHP -->
                </div>
            </div>
        </div>
        <!-- Packages End -->

        <!-- Footer Start -->
        <div class="container-fluid footer py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Get In Touch</h4>
                            <a href=""><i class="fas fa-home me-2"></i> 123 Street, New York, USA</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> info@example.com</a>
                            <a href=""><i class="fas fa-phone me-2"></i> +012 345 67890</a>
                            <a href="" class="mb-3"><i class="fas fa-print me-2"></i> +012 345 67890</a>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-white me-2"></i>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Company</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> About</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Careers</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Blog</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Press</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Gift Cards</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Magazine</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Support</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Contact</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Legal Notice</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Terms and Conditions</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Sitemap</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Cookie policy</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item">
                            <div class="row gy-3 gx-2 mb-4">
                                <div class="col-xl-6">
                                    <form>
                                        <div class="form-floating">
                                            <select class="form-select bg-dark border" id="select1">
                                                <option value="1">Arabic</option>
                                                <option value="2">German</option>
                                                <option value="3">Greek</option>
                                                <option value="3">New York</option>
                                            </select>
                                            <label for="select1">English</label>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-xl-6">
                                    <form>
                                        <div class="form-floating">
                                            <select class="form-select bg-dark border" id="select2">
                                                <option value="1">USD</option>
                                                <option value="2">EUR</option>
                                                <option value="3">INR</option>
                                                <option value="3">GBP</option>
                                            </select>
                                            <label for="select2">$</label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <h4 class="text-white mb-3">Payments</h4>
                            <div class="footer-bank-card">
                                <a href="#" class="text-white me-2"><i class="fab fa-cc-amex fa-2x"></i></a>
                                <a href="#" class="text-white me-2"><i class="fab fa-cc-visa fa-2x"></i></a>
                                <a href="#" class="text-white me-2"><i class="fas fa-credit-card fa-2x"></i></a>
                                <a href="#" class="text-white me-2"><i class="fab fa-cc-mastercard fa-2x"></i></a>
                                <a href="#" class="text-white me-2"><i class="fab fa-cc-paypal fa-2x"></i></a>
                                <a href="#" class="text-white"><i class="fab fa-cc-discover fa-2x"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Copyright Start -->
        <div class="container-fluid copyright text-body py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-end mb-md-0">
                        <i class="fas fa-copyright me-2"></i><a class="text-white" href="#">Your Site Name</a>, All right reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-start">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="text-white" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>


        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

</html>
