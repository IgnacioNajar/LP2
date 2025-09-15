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
    $Personas = array();  //indico que es un array vacio
    $Personas = array(  0 => array( 'Nombre'    =>  "Sue",
                                    'Apellido'  =>  "Palacios",    
                                    'Documento' =>  11222333,
                                    'EMail'     =>  "mail.sue@gmail.com"),
        
                        1 => array( 'Nombre'    =>  "Juan",
                                    'Apellido'  =>  "Perez",
                                    'Documento' =>  22333444,
                                    'EMail'     =>  "mail.juan@gmail.com"),

                        2 => array( 'Nombre'    =>  "Jose",
                                    'Apellido'  =>  "Martinez",
                                    'Documento' =>  33444555,
                                    'EMail'     =>  "mail.jose@gmail.com")
                    );
    
    
    /* Mostrar el nombre y apellido de cada persona      */
	////concatenacion con punto, uso comillas simples, variable de array
    echo '<b>Nombre primer persona: </b>'.$Personas[0]['Nombre'].'<br />'; 
    echo '<b>Apellido primer persona: </b>'.$Personas[0]['Apellido'].'<hr />'; 
    
	////concatenacion con punto, uso comillas dobles, variable de array
    echo "<b>Nombre segunda persona: </b>".$Personas[1]['Nombre'].'<br />'; 
    echo "<b>Apellido segunda persona: </b>".$Personas[1]['Apellido'].'<hr />'; 
    
	//se evita concatenar con el punto: se usa comillas dobles y la variable dentro, por ser array entre llaves.
    echo "<b>Nombre tercera persona: </b> {$Personas[2]['Nombre']}  <br />"; 
    echo "<b>Apellido tercera persona: </b> {$Personas[2]['Apellido']}  <hr />"; 
    
    //Mostrar el resto de datos de cada persona en cada bloque...
    
    ?>
  </body>
</html>
