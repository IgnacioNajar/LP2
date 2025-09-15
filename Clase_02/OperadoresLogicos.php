<?php
//AND &&
$num1 = 5;
if ($num1 > 0 && $num1 < 10) {
    echo 'El numero es mayor a 0 y menor a 10';
}
echo '<hr>';

if ($num1 >= 0 && $num1 <= 5) {
    echo 'El numero está entre 0 y 5';
} else {
    echo 'El numero está fuera del rango de 0 a 5';
}
echo '<hr>';

if ($num1 >= 0 && $num1 <= 20) {
    echo 'El numero está entre 0 y 20';
} elseif ($num1 > 20 && $num1 <= 40) {
    echo 'El numero está entre 20 y 40';
} elseif ($num1 > 40 && $num1 <= 60) {
    echo 'El numero está entre 40 y 60';
} else {
    echo 'El numero es mayor a 60';
}
echo '<hr>';

// OR ||
$num2 = 15;
if ($num2 < 10 || $num2 > 20) {
    echo "El numero es menor que 10 o mayor que 20";
} else {
    echo "El numero está entre 10 y 20";
}
echo '<hr>';

// NOT !
$bool = true;
if (!$bool) {
    echo "La variable es falsa";
} else {
    echo "La variable es verdadera";
}
echo '<hr>';

// XOR
$a = true;
$b = false;
if ($a xor $b) {
    echo "Solo una de las dos condiciones es verdadera";
} else {
    echo "Ambas son verdaderas o ambas son falsas";
}
echo '<hr>';

$x = 5;
$y = 10;
if (($x > 0) xor ($y < 5)) {
    echo "Solo una de las condiciones con numeros es verdadera";
} else {
    echo "Ambas condiciones son verdaderas o ambas son falsas";
}
?>
