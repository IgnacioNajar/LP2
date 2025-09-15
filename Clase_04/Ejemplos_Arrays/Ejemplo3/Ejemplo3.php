<?php
$Personas = array();
$Personas[0]['Nombre'] = "Juan";
$Personas[0]['Apellido'] = "Gonzalez";
$Personas[0]['Imagen'] ='bart.jpg';


$Personas[1]['Nombre'] = "Martin";
$Personas[1]['Apellido'] = "Juarez";
$Personas[1]['Imagen'] ='bob.jpg';


$Personas[2]['Nombre'] = "Roberto";
$Personas[2]['Apellido'] = "Perez";
$Personas[2]['Imagen'] ='pinkpanther.png';

$CantidadPersonas = count($Personas);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Ejemplo 3 - Recorrer array 
        </title>

        <!-- Meta Tags -->
        <meta charset="utf-8" />
        <meta name="generator" content="Wufoo">
        <meta name="robots" content="index, follow">

        <!-- CSS -->
        <link href="css/structure.css" rel="stylesheet">
        <link href="css/form.css" rel="stylesheet">

        <!-- JavaScript -->
        <script src="scripts/wufoo.js"></script>

        <!--[if lt IE 10]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>

    <body id="public">
        <div id="container" class="ltr">

            <h1 id="logo">
                <a href="http://wufoo.com" title="Powered by Wufoo">Wufoo</a>
            </h1>

            <form id="form83" name="form83" class="wufoo topLabel page" >

                <header id="header" class="info">
                    <h2>Listado con Tabla</h2>
                    <div>Recorrer el array para mostrar sus elementos en una tabla</div>
                </header>

                <ul>    

                    <li id="foli3" class="notranslate       ">
                        Ubicamos los elementos del array de otra manera: en una tabla
                        <hr />
                        <br />
                        <strong>
                        El listado tiene <?php echo $CantidadPersonas; ?> registros.
                        </strong>
                    </li>

                    <li id="foli213" class="notranslate      ">
                    </li>
                    <li id="foli5" class="likert notranslate col5">

                        <table border="1">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Apellido </td>
                                    <td>Nombre </td>
                                    <td>Imagen </td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                for ($i = 0; $i < $CantidadPersonas; $i++) {
                                    ?>
                                    <tr>
                                        <td><?php echo ($i+1); //indica la primer columna con el nro de registro ?></td>
                                        <td><?php echo $Personas[$i]['Apellido']; ?></td>
                                        <td><?php echo $Personas[$i]['Nombre']; ?></td>
                                        <td> <img src='imagenes/<?php echo $Personas[$i]['Imagen']; ?>' /> </td>
                                    </tr>
                                <?php } //fin del FOR ?>
                            </tbody>

                        </table>
                    </li>


                </ul>
            </form> 

        </div><!--container-->


    </body>
</html>