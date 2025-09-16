<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html">
        <title>Arrays Multidimensionales</title>
    </head>
    <body>
        <h2>Array multidimensional - recorrido for</h2>
        <?php

        /* Array multidimensional
        * un array con 3 elementos [0 1 2]
        * cada elemento tiene 4 subelementos  [Nombre Apellido Documento Email]
        */
        $Personas = array();
        $Personas[0]['Nombre']="Sue";
        $Personas[0]['Apellido']="Palacios";
        $Personas[0]['Documento']=11222333;
        $Personas[0]['Email']="mail.sue@gmail.com";
        /***********************************************************/
        $Personas[1]['Nombre']="Juan";
        $Personas[1]['Apellido']="Perez";
        $Personas[1]['Documento']=22333444;
        $Personas[1]['Email']="mail.juan@gmail.com";
        /***********************************************************/
        $Personas[2]['Nombre']="Jose";
        $Personas[2]['Apellido']="Martinez";
        $Personas[2]['Documento']=33444555;
        $Personas[2]['Email']="mail.jose@gmail.com";

        //cantidad de elementos del array
        $CantidadDeElementos=count($Personas);
        echo "El array contiene <b>$CantidadDeElementos </b> elementos. <br />";
        echo '<hr />';

        //recorrer con for
        for ($i=0; $i<$CantidadDeElementos; $i++) {
            echo '<b>Elemento nro: </b> '.$i.'<br>';
            echo '<b>Nombre: </b> '.$Personas[$i]['Nombre'].'<br>';
            echo '<b>Apellido: </b> '.$Personas[$i]['Apellido'].'<br>';
            echo '<b>Documento: </b> '.$Personas[$i]['Documento'].'<br>';
            echo '<b>Email: </b> '.$Personas[$i]['Email'].'<br>';
            echo '<hr />';
        }

        ?>
</body>
</html>
