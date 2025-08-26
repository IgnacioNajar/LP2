<?php
echo '<h2>Mostrando HTML con PHP:</h2>';

$CodigoVideo1='1xnbWiax2d8';
$CodigoVideo2='x6_GaHlXc6E';
$Alto=415;
$Ancho=360;

echo "<a href='https://www.youtube.com/watch?v=$CodigoVideo1' target='_blank' >Link para escuchar el primer link </a>";
echo '<br />'; //salto de linea

echo "<a href='https://www.youtube.com/watch?v=$CodigoVideo2' target='_blank' >Link para escuchar el segundo link </a>";

echo '<hr />';

echo '<h3>Incrustando videos de youtube </h3>';

echo '<b>Video 1</b>  <br />';
echo '<iframe width="'.$Ancho.'" height="'.$Alto.'" src="https://www.youtube.com/embed/'.$CodigoVideo1.'" frameborder="0" allowfullscreen></iframe>';
echo '<br />';
echo '<b>Video 2  </b><br />';
echo '<iframe width="'.$Ancho.'" height="'.$Alto.'" src="https://www.youtube.com/embed/'.$CodigoVideo2.'" frameborder="0" allowfullscreen></iframe>';

echo '<hr />';
?>
