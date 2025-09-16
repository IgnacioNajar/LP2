<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html">
    <title>Arrays Multidimensionales</title>
  </head>
  <body>
    <h2>
      Array multidimensional
    </h2>
    <?php

    /* Array multidimensional
     * un array con 3 elementos [0 1 2]
     * cada elemento tiene 4 subelementos  [Nombre Apellido Documento EMail]
     */
$Personas = array();
   //el mismo ejemplo, pero mas compacto en cuanto a código
$Personas = [
    0 => ['Nombre'=>"Sue", 'Apellido'=>"Palacios", 'Documento'=>11222333,'Email'=>"mail.sue@gmail.com"],
    1 => ['Nombre'=>"Juan",'Apellido'=>"Perez",'Documento' =>  22333444, 'Email'=>"perez.juan@gmail.com"],
    2 => ['Nombre'=>"Jose",'Apellido'=>"Martinez", 'Documento'=> 33444555,'Email'=>"martinez.jose@gmail.com"]
];

    /* Mostrar el nombre de cada persona      */
    echo '<b>Nombre primer persona: </b>'.$Personas[0]['Nombre'].'<br />';
    echo "<b>Nombre segunda persona: </b>".$Personas[1]['Nombre'].'<br />';
    echo "<b>Nombre tercera persona: </b> {$Personas[2]['Nombre']}  <br />";

    echo '<hr />';

    /* Mostrar el apellido de cada persona      */
    echo '<b>Apellido primer persona: </b>'.$Personas[0]['Apellido'].'<br />';
    echo '<b>Apellido segunda persona: </b> '.$Personas[1]['Apellido'].'<br />';
    echo '<b>Apellido tercera persona: </b>'.$Personas[2]['Apellido'].'<br />';

    echo '<hr />';

    /*Mostrar el documento de cada persona      */
    echo '<b>Documento primer persona: </b>'.$Personas[0]['Documento'].'<br />';
    echo "<b>Documento segunda persona: </b>".$Personas[1]['Documento']."<br />";
    echo "<b>Documento tercer persona: </b>{$Personas[2]['Documento']}<br />";

    echo '<hr />';

    /*Mostrar el Email de cada persona          */
    echo '<b>Email primer persona: </b>'.$Personas[0]['Email'].'<br />';
    echo "<b>Email segunda persona: </b>".$Personas[1]['Email']."<br />";
    echo "<b>Email tercer persona: </b>{$Personas[2]['Email']}<br />";

    echo '<hr />';

    ?>
  </body>
</html>
