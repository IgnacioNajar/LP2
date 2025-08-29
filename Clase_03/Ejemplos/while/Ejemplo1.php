<?php
$i=0;  //seteo inicial de la variable de control

echo '<h3>Pruebo el ciclo While: </h3>';

while ($i <= 5) {  // Mientras la variable de control valga 5 o menos...
    //se ejecutara todo el bloque dentro
    echo "Esta es la vuelta Nro $i <br />";

    //esta variable de CONTROL, debe estar PRESENTE
    //pues sera la q CONTROLA la CONDICIÓN del while
    $i++;
}
echo '<h3>Aqui salgo del ciclo While y continúa el codigo. </h3> <hr />';
?>

