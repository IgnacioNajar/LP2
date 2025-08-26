<?php
//uso de constantes
/* http://php.net/manual/es/function.define.php

 * El comportamiento predeterminado es sensible a mayusculas-minusculas
 */
//defino una constante
define('MICONSTANTE', 'este es el valor asignado de MICONSTANTE definida.');
echo MICONSTANTE; //muestro su valor
echo  '<hr />'; //imprime una linea horizontal

//defino otra constante
define('MiSitioWeb', 'http://www.misitio.com.ar');
echo MiSitioWeb; //muestro su valor
//otra linea horizontal
echo  '<hr />';   

?>
