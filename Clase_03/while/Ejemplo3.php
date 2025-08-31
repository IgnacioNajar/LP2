<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" /> 
        <title> Par Impar</title>
    </head>
    <body>
		<h3>Ejemplo - Par / Impar </h3>
		<h4>
			Dado un valor de variable, conocer si es par o impar. <br />
			Si el valor es par, calcular su 20%. <br />
			Si el valor es impar, calcular su 10%.<br />
		</h4>
        <?php
        $i = 100;  
		echo "la variable inicial vale $i  <hr />";
		
		if ($i%2==0) {
			$Porcentaje=$i*20/100;
			echo "$i es par, su 20% es $Porcentaje";
		}else {
			$Porcentaje=$i*10/100;
			echo "$i es impar, su 10% es $Porcentaje";
		}
        ?>    
    </body>
</html>
