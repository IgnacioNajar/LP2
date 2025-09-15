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
     * cada elemento tiene 4 subelementos  [Nombre Apellido Documento EMail]
     */
    $Personas = array();
    $Personas[0]['Nombre']="Sue";
    $Personas[0]['Apellido']="Palacios";
    $Personas[0]['Documento']="11222333";
    $Personas[0]['EMail']="palacios.sue@gmail.com";
    /***********************************************************/
    $Personas[1]['Nombre']="Juan";
    $Personas[1]['Apellido']="Perez";
    $Personas[1]['Documento']="22333444";
    $Personas[1]['EMail']="perez.juan@gmail.com";
    /***********************************************************/
    $Personas[2]['Nombre']="Jose";
    $Personas[2]['Apellido']="Martinez";
    $Personas[2]['Documento']="33444555";
    $Personas[2]['EMail']="martinez.jose@gmail.com";
    /***********************************************************/
    $Personas[3]['nombre']="Maria";
    $Personas[3]['APELLIDO']="Lopez";
    $Personas[3]['DocumenTo']=44555666;
    $Personas[3]['Email']="mail.maria@gmail.com"; 
    
    //cantidad de elementos del array: ahora tengo un elemento mas
    $CantidadDeElementos=count($Personas);
    echo "El array contiene <b>$CantidadDeElementos </b> elementos. <br />";
    
    //recorrer con for
    for ($i=0; $i<$CantidadDeElementos; $i++) {
      echo '<b>Elemento nro: </b> '.$i.'<br>';
      echo '<b>Nombre: </b> '.$Personas[$i]['Nombre'].'<br>';
      echo '<b>Apellido: </b> '.$Personas[$i]['Apellido'].'<br>';
      echo '<b>Documento: </b> '.$Personas[$i]['Documento'].'<br>';
      echo '<b>EMail: </b> '.$Personas[$i]['EMail'].'<br>';
      echo '<hr />';    
    }
    ?>
  </body>
</html>
