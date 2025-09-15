<!DOCTYPE html>
<html>
    <head>
        <title>Ejemplo 4</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
        <div>   
            <h2>Mostrando HTML con PHP</h2>
            <?php
            $CodigoVideo1='1xnbWiax2d8';
            $CodigoVideo2='x6_GaHlXc6E';
            $Alto = 315;
            $Ancho = 460;
            ?>
            <a href='https://www.youtube.com/watch?v=<?php echo $CodigoVideo1; ?>' target='_blank' >Link para escuchar el primer video </a>

            <br /><!-- salto de linea -->

            <a href='https://www.youtube.com/watch?v=<?php echo $CodigoVideo2; ?>' target='_blank' >Link para escuchar el segundo video </a>

            <hr />

            <h3>Incrustando videos de youtube </h3>

            <b>Video 1</b>  <br />
            <iframe width="<?php echo $Ancho; ?>" height="<?php echo $Alto; ?>" src="https://www.youtube.com/embed/<?php echo $CodigoVideo1; ?>" frameborder="0" allowfullscreen></iframe>
            <br />
            <b>Video 2  </b><br />
            <iframe width="<?php echo $Ancho; ?>" height="<?php echo $Alto; ?>" src="https://www.youtube.com/embed/<?php echo $CodigoVideo2; ?>" frameborder="0" allowfullscreen></iframe>

            <hr />

        </div>
    </body>
</html>
