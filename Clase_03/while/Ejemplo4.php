<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" /> 
        <title> Par Impar</title>
    </head>
    <body>
		<h3>Ejemplo </h3>
		<h4>
			Dado un valor de variable, conocer si es par o impar. <br />
			Si el valor es par, incrementarlo en su 20% . <br />
			Si el valor es impar, decrementarlo en su 10%.<br />
		</h4>
        <?php
        $i = 10;  
		echo "la variable inicial vale $i  <hr />";

		if ($i%2==0) {
			$Porcentaje=$i*20/100;
			$Resultado=$i + $Porcentaje;
			echo "$i es par, el porcentaje es $Porcentaje y el resultado de incrementarselo es $Resultado . ";
		}else {
			$Porcentaje=$i*10/100;
			$Resultado=$i - $Porcentaje;
			echo "$i es impar, el porcentaje es $Porcentaje y el resultado de decrementarselo es $Resultado . ";
		}
        ?>
    </body>
</html>
