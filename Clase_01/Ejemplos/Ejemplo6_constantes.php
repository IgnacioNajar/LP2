<?php
define('TituloPagina', 'Ejercicio con constantes');
define('MiSitioWeb', 'http://www.misitio.com.ar');
define('POWERED_BY', 'Sue Palacios');   
?>


<!DOCTYPE html>
<html>
    <head>
        <title><?php echo TituloPagina; ?></title>
        <meta http-equiv="Content-Type" >
    </head>
    <body>
        <div align="center">
            <a href="#"><?php echo MiSitioWeb; ?></a>
        </div>
        <footer align="center">
            <p>Copyright &copy; <strong><?php echo POWERED_BY; ?></strong></p>
        </footer>
    </body>
</html>
