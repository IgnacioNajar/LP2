<?php
echo '<h2>Mostrando valores de variables:</h2>';  

$Variable1  =   100;    //variable de tipo de dato entero
$Variable2  =   'Un texto cualquiera.'; //variable de tipo string o cadena
$Variable3  =   1250.50;    //variable de tipo flotante. Notar que se usa el punto para decimales.

/*Para concatenar texto o HTML y valores de variables*/
//con comillas simples
echo '<h3>Aqui usando comillas simples: </h3>';
echo 'El valor de la primer variable es '.$Variable1.'<br />';
echo 'El valor de la segunda variable es '.$Variable2.'<hr />';
//Notar que el punto "une", "pega", "concatena" el valor de la variable con el texto o HTML.

//con comillas dobles   
echo "<h3>Aqui usando comillas dobles: </h3>";
echo "El valor de la primer variable es ".$Variable1."<br />";
echo "El valor de la segunda variable es ".$Variable2."<hr />";
//Notar que el punto "une", "pega", "concatena" el valor de la variable con el texto o HTML.
/**  HASTA AQUI SE COMPORTAN IGUAL **/
   

//si uso comillas dobles, puedo prescindir del punto de concatenacion:
echo '<h3>Aqui usando comillas dobles para mostrar el valor de la variable dentro: </h3>';
echo "El valor de la primer variable es $Variable1 <br />
El valor de la segunda variable es $Variable2 <br />
El valor de la tercer variable es $Variable3 <hr /> ";
//Notar que dentro de las comillas dobles ya toma el propio valor de la variable

//si uso comillas simples ya no toma el valor de la variable. 
echo '<h3>Aqui usando comillas simples con la variable dentro: </h3>';
echo 'El valor de la primer variable es $Variable1 <br />
El valor de la segunda variable es $Variable2 <br />
El valor de la tercer variable es $Variable3 <hr /> ';
//Notar que aqui no se muestra el valor de la variable, solo un texto que indica su nombre.

?>
