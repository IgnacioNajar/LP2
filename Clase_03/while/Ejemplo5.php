<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset=utf-8"/> 
        <title> Par Impar</title>
    </head>
    <body>
		<h3>Ejemplo - While  </h3>
		<h4>
			Del el 1 al 10 conocer si cada numero es par o impar. <br />
			Si el valor es par, incrementarlo en su 20% . <br />
			Si el valor es impar, decrementarlo en su 10%.<br />
		</h4>
        <?php
        $i = 1;  //variable de control
		while ($i<=10) {  //este blque se hará hasta que la i valga 10
				
			if ($i%2==0) {  // $i es par? 
				$Porcentaje=$i*20/100;
				$Resultado=$i + $Porcentaje;
				echo "$i es par, el porcentaje es $Porcentaje y el resultado de incrementarselo es $Resultado . ";
				echo '<hr />' ; //muestro una linea horizontal
				
			}else {  // $i es impar
				$Porcentaje=$i*10/100;
				$Resultado=$i - $Porcentaje;
				echo "$i es impar, el porcentaje es $Porcentaje y el resultado de decrementarselo es $Resultado . ";
				echo '<hr />' ; //muestro una linea horizontal
			}	
			//recuerden incrementar la variable de control! para q llegue al corte
			$i++;
				
		}
        ?>
    </body>
</html>
