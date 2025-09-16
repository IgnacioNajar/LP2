<?php
    $lista_peliculas = [
        //Pelicula 1
        ["nombre" => "Avatar",
        "productora" => "20th Century Fox (Walt Disney Studios Motion Pictures)",
        "taquilla_usa" => 785221649,
        "taquilla_internacional" => 2138484377,
        "presupuesto" => 246000000,
        "anio" => 2009,
        "recaudacion_mundial" => ""],
        //Pelicula 2
        ["nombre" => "Avengers: Endgame",
        "productora" => "Walt Disney Studios Motion Pictures",
        "taquilla_usa" => 858373000,
        "taquilla_internacional" => 1941066100,
        "presupuesto" => 400000000,
        "anio" => 2019,
        "recaudacion_mundial" => ""],
        //Pelicula 3
        ["nombre" => "Avatar: The Way of Water",
        "productora" => "Walt Disney Studios Motion Pictures",
        "taquilla_usa" => 684075767,
        "taquilla_internacional" => 1636174514,
        "presupuesto" => 356000000,
        "anio" => 2022,
        "recaudacion_mundial" => ""],
        //Pelicula 4
        ["nombre" => "Titanic",
        "productora" => "20th Century Fox (Walt Disney Studios Motion Pictures)/ Paramount Pictures",
        "taquilla_usa" => 674354882,
        "taquilla_internacional" => 1590450697,
        "presupuesto" => 200000000,
        "anio" => 1997,
        "recaudacion_mundial" => ""],
        //Pelicula 5
        ["nombre" => "Ne Zha 2",
        "productora" => "Beijing Enlight Pictures ",
        "taquilla_usa" => 15206380,
        "taquilla_internacional" => 2157133620 ,
        "presupuesto" => 80000000,
        "anio" => 2025,
        "recaudacion_mundial" => ""],
        //Pelicula 6
        ["nombre" => "Star Wars: Episode VII - Force Awakenings",
        "productora" => "Walt Disney Studios Motion Pictures",
        "taquilla_usa" => 936662225,
        "taquilla_internacional" => 113464799,
        "presupuesto" => 306000000,
        "anio" => 2015,
        "recaudacion_mundial" => ""],
        //Pelicula 7
        ["nombre" => "Avengers: Infinity War",
        "productora" => "Walt Disney Studios Motion Pictures",
        "taquilla_usa" => 678815482,
        "taquilla_internacional" => 1373599557,
        "presupuesto" => 356000000,
        "anio" => 2018,
        "recaudacion_mundial" => ""],
        //Pelicula 8
        ["nombre" => "Spider-Man: No Way Home",
        "productora" => "Sony Pictures/Walt Disney Studios Motion Pictures",
        "taquilla_usa" => 814866759,
        "taquilla_internacional" => 11065331944,
        "presupuesto" => 200000000,
        "anio" => 2021,
        "recaudacion_mundial" => ""],
        //Pelicula 9
        ["nombre" => "Inside Out 2",
        "productora" => "Walt Disney Studios Motion Pictures",
        "taquilla_usa" => 652980194,
        "taquilla_internacional" => 1045883622,
        "presupuesto" => 200000000 ,
        "anio" => 2024,
        "recaudacion_mundial" => ""],
        //Pelicula 10
        ["nombre" => "Jurassic World",
        "productora" => "Universal Pictures",
        "taquilla_usa" => 653406625,
        "taquilla_internacional" => 1018130819,
        "presupuesto" => 150000000 ,
        "anio" => 2015,
        "recaudacion_mundial" => ""]
    ];

    $cantidad_peliculas = count($lista_peliculas);

    for ($i = 0; $i < $cantidad_peliculas; $i++) {

    }
    ?>

<!DOCTYPE html>
<html>
    <head>

        <title>
            Ejercicio 3 - Recorrer array
        </title>

        <!-- Meta Tags -->
        <meta charset="utf-8" />
        <meta name="generator" content="Wufoo">
        <meta name="robots" content="index, follow">

        <!-- CSS -->
        <link href="css/form.css" rel="stylesheet">
        <link href="css/structure.css" rel="stylesheet">

        <!-- JavaScript -->
        <script src="scripts/wufoo.js"></script>

        <style>
            .likert table {
                border-collapse: collapse !important; /* importante */
                width: 100%;
            }

            .likert table th,
            .likert table td {
                border: 1px solid black !important;
                padding: 5px;
                text-align: center;
            }

            .highlight {
                font-weight: bold;
                color: #000000;
            }

            #container {
                width:800px
            }

            
        </style>
        <!--[if lt IE 10]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>

    <body id="public">
        <div id="container" class="ltr">

            <h1 id="logo">
                <a href="http://wufoo.com" title="Powered by Wufoo">Wufoo</a>
            </h1>

            <form id="form83" name="form83" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
            action="">

                <header id="header" class="info">
                    <h2>Listado</h2>
                    <div>Recorrer el array para mostrar sus elementos y calcular lo solicitado. </div>
                </header>

                <ul>

                    <li id="foli3" class="notranslate       ">
                        Segun los datos extraidos de <a href="https://es.wikipedia.org/wiki/Anexo:Pel%C3%ADculas_con_las_mayores_recaudaciones" target="_blank">wikipedia</a> <br />
                        Calcular los valores de las columnas solicitadas.
                        <hr />
                        <br />
                        <strong>
                            El listado tiene <?= $cantidad_peliculas; ?> registros.
                        </strong>
                    </li>
                    <li id="foli213" class="notranslate      ">
                    </li>
                    <li id="foli5" class="likert notranslate col5">
                        <table>
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre Pelicula</th>
                                    <th scope="col">Productora</th>
                                    <th scope="col">Presupuesto</th>
                                    <th scope="col">Taquilla en EEUU</th>
                                    <th scope="col">Taquilla fuera de EEUU</th>
                                    <th scope="col">Año de estreno</th>
                                    <th scope="col"><span class="highlight">Recaudación Mundial</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < $cantidad_peliculas; $i++) : ?>
                                    <!-- Calculos -->
                                    <!-- Total recaudacion mundial -->
                                    <?php $lista_peliculas[$i]["recaudacion_mundial"] = $lista_peliculas[$i]["taquilla_usa"] + $lista_peliculas[$i]["taquilla_internacional"]; ?>
                                    <!-- Porcentaje taquilla en USA -->
                                    <?php $porcentaje_taquilla_usa = ($lista_peliculas[$i]["taquilla_usa"] / $lista_peliculas[$i]["recaudacion_mundial"]) * 100; ?>
                                    <!-- Porcentaje taquilla internacional -->
                                    <?php $porcentaje_taquilla_internacional = ($lista_peliculas[$i]["taquilla_internacional"] / $lista_peliculas[$i]["recaudacion_mundial"]) * 100; ?>
                                    <!-- Fin de calculos -->
                                    <tr>
                                        <td><?= $i + 1; ?></td>
                                        <td><?= $lista_peliculas[$i]["nombre"]; ?></td>
                                        <td><?= $lista_peliculas[$i]["productora"]; ?></td>
                                        <td>$<?= number_format($lista_peliculas[$i]["presupuesto"], 0, ",",  "."); ?></td>
                                        <td>$<?= number_format($lista_peliculas[$i]["taquilla_usa"], 0, ",", "."); ?> (<?= number_format($porcentaje_taquilla_usa, 2, ",", "."); ?>%)</td>
                                        <td>$<?= number_format($lista_peliculas[$i]["taquilla_internacional"], 0, ",", "."); ?> (<?= number_format($porcentaje_taquilla_internacional, 2, ",", "."); ?>%)</td>
                                        <td><?= $lista_peliculas[$i]["anio"]; ?></td>
                                        <td>$<?= number_format($lista_peliculas[$i]["recaudacion_mundial"], 0, ",", "."); ?></td>
                                    </tr>
                                <?php endfor; ?>
                            </tbody>
                        </table>
                    </li>
                </ul>
            </form>

        </div><!--container-->


    </body>
</html>
