<?php
    $datos_empresa = [
        ["Nombre" => "Ignacio",
        "Apellido" => "Najar",
        "Documento" => 4044189,
        "Email" => "ignacio.najar2310@gmail.com",
        "Avatar" => "imagenes/jerry.png"],
        ["Nombre" => "Naara",
        "Apellido" => "Larcher",
        "Documento" => 43189557,
        "Email" => "naaralar40@gmail.com",
        "Avatar" => "imagenes/bellota.jpg"],
        ["Nombre" => "Lucrecia",
        "Apellido" => "Fernandez",
        "Documento" => 24324730,
        "Email" => "lucrefg@hotmail.com",
        "Avatar" => "imagenes/burbuja.jpg"],
        ["Nombre" => "Raul",
        "Apellido" => "Najar",
        "Documento" => 21000000,
        "Email" => "joseraulnajar@hotmail.com",
        "Avatar" => "imagenes/elmer.png"]
    ]
?>

<html>
    <head>

        <title>
            Ejercicio 2 - Recorrer array
        </title>

        <!-- Meta Tags -->
        <meta charset="utf-8">
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
        <style>
            img {
                max-width: 100%;
                height: auto;
                width: 40px;
            }
        </style>
    </head>

    <body id="public">
        <div id="container" class="ltr">

            <h1 id="logo">
                <a href="http://wufoo.com" title="Powered by Wufoo">Wufoo</a>
            </h1>

            <form id="form83" name="form83" class="wufoo topLabel page" autocomplete="off" >

                <header id="header" class="info">
                    <h2>Listado</h2>
                    <div>Recorrer el array para mostrar sus elementos. </div>
                </header>

                <ul>
                    <li id="foli3" class="notranslate       ">
                        Personal en la empresa
                    </li>
                    <li id="foli213" class="notranslate      ">
                    </li>
                    <li id="foli5" class="likert notranslate
                        col5
                        ">

                        <table cellspacing=0>
                            <thead>
                                <tr>
                                    <td>Nombre</td>
                                    <td>Apellido</td>
                                    <td>Documento</td>
                                    <td>Email</td>
                                    <td>Avatar</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < count($datos_empresa); $i++): ?>
                                    <tr class="statement1">
                                        <td><?= $datos_empresa[$i]["Nombre"]; ?></td>
                                        <td><?= $datos_empresa[$i]["Apellido"]; ?></td>
                                        <td><?= $datos_empresa[$i]["Documento"]; ?></td>
                                        <td><?= $datos_empresa[$i]["Email"]; ?></td>
                                        <td><img src="<?= $datos_empresa[$i]['Avatar']; ?>"
                                        title="Avatar del usuario"
                                        alt="Avatar del usuario"></td>
                                    </tr>
                                <?php endfor; ?>
                            </tbody>
                        </table>
                    </li>
                </ul>
            </form>

        </div><!--container-->

        <a class="powertiny" href="http://wufoo.com/form-builder/" title="Powered by Wufoo"
        style="display:block !important;visibility:visible !important;text-indent:0 !important;position:relative !important;height:auto !important;width:95px !important;overflow:visible !important;text-decoration:none;cursor:pointer !important;margin:0 auto !important">
        <span style="background:url(./images/powerlogo.png) no-repeat center 7px; margin:0 auto;display:inline-block !important;visibility:visible !important;text-indent:-9000px !important;position:static !important;overflow: auto !important;width:62px !important;height:30px !important">Wufoo</span>
        <b style="display:block !important;visibility:visible !important;text-indent:0 !important;position:static !important;height:auto !important;width:auto !important;overflow: auto !important;font-weight:normal;font-size:9px;color:#777;padding:0 0 0 3px;">Designed</b>
        </a>
    </body>
</html>
