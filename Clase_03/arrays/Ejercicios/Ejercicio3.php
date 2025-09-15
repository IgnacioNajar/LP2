<?php
   $VentasMensuales[1]=12500.25;
   $VentasMensuales[2]=15500;
   $VentasMensuales[3]=18562.75;
   $VentasMensuales[4]=5326.50;
   $VentasMensuales[5]=10000;
   $VentasMensuales[6]=14000.25;
   
   $VentasMensuales[7]=14000;
   $VentasMensuales[8]=15500;
   $VentasMensuales[9]=10256.75;
   $VentasMensuales[10]=8563.50;
   $VentasMensuales[11]=14699;
   $VentasMensuales[12]=25000.25;
   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8" /> 
        <title> Arrays </title>
    </head>
    <body>
        <h3>Array usando for</h3>
        <p>
            Notar: cada subelemento va encerrado entre llaves {} si uso comillas dobles, <br />
            para evitar concatenar con el punto y armar una sola linea de mensaje cada vez.
        </p>
        <h4>
           a)  Calcular la suma de ventas mensuales del 1er trimestre y 2do trimestre. <br />
           b)  Calcular la suma de ventas mensuales del 2do semestre. <br />
           c)  Calcular el promedio de ventas anual. <br />
        </h4>
        <hr />
        <?php 
        //inicializo todas las variables en 0 para usarlas luego en el recorrido
        $SumaTrimestre1=0;  
        $SumaTrimestre2=0;
        $Suma2doSemestre=0;        

        $cantidadSubElementos=count($VentasMensuales);
        for ($i=1; $i<=$cantidadSubElementos ; $i++) {
            //empiezo a recorrer desde el 1, y se debe repetir hasta que llegue al 12
            
            //si $i es menor o igual a 3, corresponde sumar para el 1er trimestre
            if ($i<=3) {
                $SumaTrimestre1 =   $VentasMensuales[$i] + $SumaTrimestre1;
                
            }else if ($i>3 && $i<=6 ) {
                //si $i vale entre 4 y 6, corresponde sumar para el 2do trimestre
                $SumaTrimestre2 =   $VentasMensuales[$i] + $SumaTrimestre2;
                
            }else {
                //si $i vale 7 o mas, corresponde sumar para el 2do semestre
                $Suma2doSemestre    =   $VentasMensuales[$i]+ $Suma2doSemestre;
            }
        }
        
        //calculo el promedio de igual manera que antes, ya tengo los montos
        $PromedioAnual= ($SumaTrimestre1 + $SumaTrimestre2 + $Suma2doSemestre ) / $cantidadSubElementos;
        
        //aqui mostraremos solamente los resultados finales :
        ?>
        a) La suma de las ventas del primer trimestre es:
            <strong> <?php echo $SumaTrimestre1; ?></strong> <br />
            
            <hr />
        <?php
        echo " La suma de las ventas del segundo Trimestre es: <strong> $SumaTrimestre2 </strong><br />";
        ?>
        <hr />
        
        <?php
        echo "b) La suma de las ventas del segundo Semestre es: <strong> $Suma2doSemestre </strong><br />";
        ?>
        <hr />
        <?php
        echo "c) El promedio de ventas anual es: <strong> $PromedioAnual </strong><br />";
        ?>
        <hr />
    </body>
</html>
