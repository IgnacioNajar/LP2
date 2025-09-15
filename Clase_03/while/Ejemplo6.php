<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" />
        <title> Par Impar</title>
    </head>
    <body>
		<h3>Ejemplo - While </h3>
		<h4>
			Del el 1 al 10 conocer si cada numero es par o impar, armando una tabla<br />
			Si el valor es par, mostrarlo con color de fondo de celda gris . <br />
			Si el valor es impar, mostrarlo sin color de fondo de celda.<br />
		</h4>

		<table border=1>
			<tr>
				<td>Numero</td>
				<td>Par o Impar?</td>
			</tr>

			<?php
			$i = 1;  //variable de control
			while ($i<=10) {  //este blque se hará hasta que la i valga 10
				if ($i%2==0) {  // $i es par? 		?>
					<tr style="background: #f9d190;">
						<td>
							<strong> <?php echo $i; ?></strong>
						</td>
						<td>
							<strong>Par</strong>
						</td>
					</tr>

					<?php
				}else {  // $i es impar			?>
					<tr>
						<td>
							<strong> <?php echo $i; ?></strong>
						</td>
						<td>
							 <strong>Impar</strong>
						</td>
					</tr>

					<?php
				}
				//recuerden incrementar la variable de control! para q llegue al corte
				$i++;
			}
		?>
        </table>
    </body>
</html>
