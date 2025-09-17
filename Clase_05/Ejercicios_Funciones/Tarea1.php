<?php
    //Addition function
    function addition($first_number, $second_number) {
        return $first_number + $second_number;
    }

    //Subtraction function
    function subtraction($first_number, $second_number) {
        return $first_number - $second_number;
    }

    //Multiplication function
    function multiplication($first_number, $second_number) {
        return $first_number * $second_number;
    }

    //Division function
    function division($first_number, $second_number) {
        $resultado =  ($second_number == 0) ?
        "No se puede dividir por 0" : $first_number / $second_number;

        return $resultado;
    }

    //Declaring number variables
    $first_number = 100;
    $second_number = 5;

    //Calling functions
    $addition_result = addition($first_number, $second_number);
    $subtraction_result = subtraction($first_number, $second_number);
    $multiplication_result = multiplication($first_number, $second_number);
    $division_result = division($first_number, $second_number);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tarea 1</title>
        <style>
            .highlight {
                font-weight: bold;
            }

            header,
            article {
                border-bottom: 1px solid #c0c0c0ff;
            }

            h1, h2 {
                margin: 0.5rem 0;
            }

            h2 {
                text-decoration: underline #636363ff 1px;
            }
        </style>
    </head>
    <body>
        <header class="main-header">
            <h1>Ejercicios de funciones con operaciones Matemáticas</h1>
        </header>

        <section class="math-operations">
            <article class="addition">
                <h2>Función Sumar:</h2>
                <p>
                    El resultado de sumar <span class="highlight"><?= $first_number; ?></span>
                    más <span class="highlight"><?= $second_number; ?></span> es:
                    <span class="highlight"><?= $addition_result; ?></span>
                </p>
            </article>

            <article class="subtraction">
                <h2>Función Restar:</h2>
                <p>
                    El resultado de restar <span class="highlight"><?= $first_number; ?></span>
                    y <span class="highlight"><?= $second_number; ?></span> es:
                    <span class="highlight"><?= $subtraction_result; ?></span> </p>
            </article>

            <article class="multiplication">
                <h2>Función Multiplicar:</h2>
                <p>
                    El resultado de multiplicar <span class="highlight"><?= $first_number; ?></span>
                    por <span class="highlight"><?= $second_number; ?></span> es:
                    <span class="highlight"><?= $multiplication_result; ?></span>
                </p>

            </article>

            <article class="division">
                <h2>Función Dividir:</h2>
                <p>
                    El resultado de dividir <span class="highlight"><?= $first_number; ?></span>
                    y <span class="highlight"><?= $second_number; ?></span> es:
                    <span class="highlight"><?= $division_result; ?></span>
                </p>
            </article>
        </section>
    </body>
</html>
