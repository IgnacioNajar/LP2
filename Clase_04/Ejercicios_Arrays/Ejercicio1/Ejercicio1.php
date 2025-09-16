<?php
    $datos = [
        ["Nombre" => "Sue",
        "Apellido" => "Palacios",
        "Documento" => 11222333,
        "Email" => "sue@gmail.com",
        "Imagen" => "imagenes/bellota.jpg"],
        ["Nombre" => "Mary",
        "Apellido" => "Perez",
        "Documento" => 22333444,
        "Email" => "mary@gmail.com",
        "Imagen" => "imagenes/bombom.jpg"],
        ["Nombre" => "Carla",
        "Apellido" => "Martinez",
        "Documento" => 33444555,
        "Email" => "carla@gmail.com",
        "Imagen" => "imagenes/burbuja.jpg"]
    ];

    $chicas_superpoderosas = ["Bellota", "Bombom", "Burbuja"];
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="main.css">
        <title>Ejercicio 1</title>
    </head>
    <body>
        <header class="main-header">
            <h1>Array Multidimensional - Recorrido FOR</h1>
        </header>

        <section class="presentacion">
            <h2 class="divider">El array contiene 3 elementos:</h2>
            <div class="profile-cards">
                <?php for ($i = 0; $i < count($datos); $i++): ?>
                    <p><span class="highlight">Elemento nro:</span> <?= $i ?></p>
                    <p><span class="highlight">Nombre:</span> <?= $datos[$i]['Nombre'] ?></p>
                    <p><span class="highlight">Apellido:</span> <?= $datos[$i]['Apellido'] ?></p>
                    <p><span class="highlight">Documento:</span> <?= $datos[$i]['Documento'] ?></p>
                    <p><span class="highlight">Email:</span> <?= $datos[$i]['Email'] ?></p>
                    <p class="divider"><span class="highlight">Imagen:</span>
                        <img class="girl-img"
                        src="<?= $datos[$i]['Imagen'] ?>"
                        alt="Imagen de <?= $chicas_superpoderosas[$i] ?>"
                        title="Imagen de <?= $chicas_superpoderosas[$i] ?>">
                    </p>
                <?php endfor; ?>
            </div>
        </section>
    </body>
</html>
