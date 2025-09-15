<html>
    <head>
        <title>Clase 1 Ej 1</title>
    </head>
    <body>

        <?php
// esto es un comentario de linea

        /*
         * esto es un comentario de multiples lineas [comienza con barra y asterisco]
         * es decir que todo este bloque no ser� procesado por PHP
         * [finaliza con asterisco y barra]
         */    

//aqui asigno valores a ciertas variables.
        $Variable1 = 100;  //variable de tipo de dato entero
        $Variable2 = 'Un texto cualquiera.'; //variable de tipo string o cadena
        $Variable3 = 1250.50; //variable de tipo flotante. Notar que se usa el punto para decimales.
//aqui muestro valores, con la sentencia "echo"
        echo $Variable1; //muestro valor de la 1er variable
        echo '<hr />';  //muestro un salto de linea

        echo $Variable2; //muestro valor de la 2da variable
        echo '<hr />';  //muestro un salto de linea

        echo $Variable3; //muestro valor de la 3er variable

        echo '<hr />';  //muestro una linea horizontal
        ?>

    </body>
</html>