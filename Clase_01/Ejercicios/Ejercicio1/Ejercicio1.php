<?php
define('TituloPagina', 'Libros de Stephen King');
define('SitioWeb', 'https://twitter.com/stephenking');
define('Autor', 'Ignacio Najar');
$NombreAutor = 'Stephen King';
/*
Usar el Ejemplo 7 como guia para la resolucion.

1) Usar constantes para definir:
- el Titulo de la Pagina: Libros de Stephen King
- el sitio web: https://twitter.com/stephenking
- la firma de la pagina con el nombre del alumno

2) Usar variables para mostrar 3 o 4 libros de Stephen King
- una variable con el nombre de cada libro, actualizando su valor donde sea necesario
- una variable con el nombre del autor que estamos trabajando aqui
- una variable con el nombre la imagen de cada libro [revisar la carpeta Ejercicio1/images]. La carpeta ya tiene imagenes de libros de King.
*/
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo TituloPagina; ?></title>
        <meta http-equiv="Content-Type"  />
        <style type="text/css">
            #contenedor {
                display: table;
                border: 2px solid #000;
                width: 300px;
                text-align: center;
                margin: 0 auto;
            }
            .contenidos {
                display: table-row;
            }
            .columna {
                display: table-cell;
                border: 1px solid #000;
                vertical-align: middle;
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <div id="contenedor">
            <div class="contenidos">

                <?php
                $NombreLibro = 'Carrie';
                $RutaImgLibro = 'images/carrie.jpg';
                ?>

                <div class="columna"><?php echo $NombreLibro; ?></div>
                <div class="columna"><?php echo $NombreAutor; ?></div>
                <div class="columna"><img src="<?php echo $RutaImgLibro; ?>" width="300" /></div>
            </div>

           <div class="contenidos">

                <?php
                $NombreLibro = 'El Resplandor';
                $RutaImgLibro = 'images/el_resplandor.jpg';
                ?>

                <div class="columna"><?php echo $NombreLibro; ?></div>
                <div class="columna"><?php echo $NombreAutor; ?></div>
                <div class="columna"><img src="<?php echo $RutaImgLibro; ?>" width="300" /></div>
            </div>

			<div class="contenidos">

                <?php
                $NombreLibro = 'La Danza';
                $RutaImgLibro = 'images/la_danza.jpg';
                ?>

                <div class="columna"><?php echo $NombreLibro; ?></div>
                <div class="columna"><?php echo $NombreAutor; ?></div>
                <div class="columna"><img src="<?php echo $RutaImgLibro; ?>" width="300" /></div>
            </div>

           <div class="contenidos">

                <?php
                $NombreLibro = 'Misery';
                $RutaImgLibro = 'images/misery.jpg';
                ?>

                <div class="columna"><?php echo $NombreLibro; ?></div>
                <div class="columna"><?php echo $NombreAutor; ?></div>
                <div class="columna"><img src="<?php echo $RutaImgLibro; ?>" width="300" /></div>
            </div>

        </div>

        <br />
        <div align="center">
            <a href="#" target="_blank" ><?php echo SitioWeb; ?></a>
        </div>
        <footer align="center">
            <p>Copyright &copy;  <strong><?php echo Autor; ?></strong></p>
        </footer>
    </body>
</html>
