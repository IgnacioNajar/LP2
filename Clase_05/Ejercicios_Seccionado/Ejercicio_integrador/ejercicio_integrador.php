<?php
    require_once('array_redes_sociales.php');
?>

<!DOCTYPE html>
<html lang="en">
    <?php
        require_once('head.php');
    ?>
    <body>

        <!-- Spinner Start -->
        <?php
            require_once('spinner.php');
        ?>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <?php
            require_once('redes_sociales.php');
        ?>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <?php
                require_once('navbar.php');
            ?>

            <!-- Carousel Start -->
            <?php
                require_once('carousel.php');
            ?>
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
                    <h5 class="section-title px-3">Brasil</h5>
                    <h1 class="mb-0">Mes: 9 - Temporada Baja</h1>
                </div>
                <div class="packages-carousel owl-carousel">
                    <?php
                        require_once('seccion_viajes.php');
                    ?>
                <!--
                <?php
                    require_once('seccion_comentada.php');
                ?>
                  -->
                </div>
            </div>
        </div>
        <!-- Packages End -->


        <!-- Footer Start -->
        <?php
            require_once('footer.php');
        ?>
        <!-- Footer End -->

        <!-- Copyright Start -->
        <?php
            require_once('copyright.php');
        ?>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>


        <!-- JavaScript Libraries / Template JavaScript -->
        <?php
            require_once('js_libs_template.php');
        ?>
    </body>

</html>
