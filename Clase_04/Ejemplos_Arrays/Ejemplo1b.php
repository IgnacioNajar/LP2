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
$Personas = array( 0 => array( 'Nombre'=>"Sue", 'Apellido'=>"mail", 'Documento'=>11222333,'EMail'=>"mail.sue@gmail.com"),
                   1 => array( 'Nombre'=>"Juan",'Apellido'=>"Perez",'Documento' =>  22333444, 'EMail'=>"perez.juan@gmail.com"),
                   2 => array( 'Nombre'=>"Jose",'Apellido'=>"Martinez", 'Documento'=> 33444555,'EMail'=>"martinez.jose@gmail.com")
                  );
    
    /* Mostrar el nombre de cada persona      */
    echo '<b>Nombre primer persona: </b>'.$Personas[0]['Nombre'].'<br />';    
    echo "<b>Nombre segunda persona: </b>".$Personas[1]['Nombre'].'<br />'; 
    echo "<b>Nombre tercera persona: </b> {$Personas[2]['Nombre']}  <br />"; 
     
    echo '<hr />';
    
    /* Mostrar el apellido de cada persona      */
    echo '<b>Apellido primer persona: </b>'.$Personas[0]['Apellido'].'<br />'; 
    echo '<b>Apellido segunda persona: </b> '.$Personas[1]['Apellido'].'<br />'; 
    echo '<b>Apellido tercera persona: </b>'.$Personas[2]['Apellido'].'<br />'; 
    
    
    /* Mostrar el documento y el mail de cada persona .... */
  
    
    ?>
  </body>
</html>
