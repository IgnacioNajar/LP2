<?php
//Mayor
$var = 10;
echo ($var > 1) ? 'El valor es mayor a 1' : 'El valor es menor a 1';
echo '<hr style="height: 1px; width: 30em; background-color: gray; border: none; margin-left: 0; margin-right: auto">' ;

//Menor
$num1 = 100;
$num2 = 200;
echo($num1 < $num2) ? "$num1 es menor que $num2" : "$num2 es menor que $num1";
echo '<hr style="height: 1px; width: 30em; background-color: gray; border: none; margin-left: 0; margin-right: auto">';

//Mayor o igual
$num3 = 6;
$num4 = 6;
echo ($num3 >= $num4) ? "$num3 es mayor o igual que $num4" : "$num3 es menor que $num4";
echo '<hr style="height: 1px; width: 30em; background-color: gray; border: none; margin-left: 0; margin-right: auto">';

//Menor o igual
$num5 = 10;
$num6 = 30;
echo ($num5 <= $num6) ? "$num5 es menor o igual que $num6" : "$num5 es mayor que $num6";
echo '<hr style="height: 1px; width: 30em; background-color: gray; border: none; margin-left: 0; margin-right: auto">';

//Igual
$num7 = 20;
$num8 = 20.1;
echo ($num7 == $num8) ? 'Los numeros son iguales' : 'Los numeros son desiguales';
?>
