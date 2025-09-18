<?php
    $datos_personas = [
        ['nombre' => 'Raul',
        'apellido' => 'Najar',
        'fecha_nacimiento' => '18/03/1971',
        ],
        ['nombre' => 'Lucrecia',
        'apellido' => 'Fernandez',
        'fecha_nacimiento' => '16/12/1974',
        ],
        ['nombre' => 'Ignacio',
        'apellido' => 'Najar',
        'fecha_nacimiento' => '23/10/1997',
        ],
        ['nombre' => 'Naara',
        'apellido' => 'Larcher',
        'fecha_nacimiento' => '02/03/2001',
        ],
        ['nombre' => 'Santiago',
        'apellido' => 'Najar',
        'fecha_nacimiento' => '07/02/2002'
        ]
    ];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 5</title>
        <meta http-equiv="Content-Type" content="text/html">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <header class="main-header">
            <h1>Funciones de Arrays con PHP:</h1>
        </header>

        <section class="ejercicio">
            <h2>Ejercicio</h2>
            <article class="descripcion">
                <ul>
                    <li>
                        Generar un array con los datos personales de 3 personas: Nombre, apellido, fecha de nacimiento [dd/mm/yyyy] .
                    </li>
                    <li>
                        Calcular la edad basicamente usando solamente su año de nacimiento.
                    </li>
                    <li>
                        Mostrar en una tabla los 4 valores de cada persona. El nombre debe ir con su primer letra en mayuscula, y el apellido todo en mayuscula.
                    </li>
                </ul>
            </article>

            <article class="resolucion">
                <table>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Edad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($datos_personas as $indice => $persona): ?>
                            <?php
                                list($dia, $mes, $anio) = explode('/', $persona['fecha_nacimiento']);
                                $edad = date('Y') - $anio;

                                if (date('m') <= $mes && date('d') < $dia) {
                                    $edad--;
                                }
                            ?>
                            <tr>
                                <td data-label="#"><?= $indice + 1; ?></td>
                                <td data-label="Nombre"><?= ucwords($persona['nombre']); ?></td>
                                <td data-label="Apellido"><?= strtoupper($persona['apellido']); ?></td>
                                <td data-label="Edad"><?= $edad; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </article>
            </section>
    </body>
</html>
