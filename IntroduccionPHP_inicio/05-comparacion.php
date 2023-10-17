<?php include 'includes/header.php';

$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = "30";

echo 'Numero 1 es mayor que numero 2?'; echo '<br>';
var_dump($numero1 > $numero2);
echo "<br>";

echo 'Numero 1 es menor que numero 2?'; echo '<br>';
var_dump($numero1 < $numero2);
echo "<br>";

echo 'Numero 1 es mayor o igual que numero 2?'; echo '<br>';
var_dump($numero1 >= $numero2);
echo "<br>";

//Imprime -1 Si el valor de la izquierda es menor.
echo 'Imprime -1 Si el valor de la izquierda es menor'; echo '<br>';
var_dump($numero1 <=> $numero2);
echo "<br>";

//Imprime 0 Si los dos valores son iguales.
echo 'Imprime 0 Si los dos valores son iguales.'; echo '<br>';
var_dump($numero2 <=> $numero3);
echo "<br>";

//Imprime 1 Si el valor de la izquierda es mayor.
echo 'Imprime 1 Si el valor de la izquierda es mayor.'; echo '<br>';
var_dump($numero2 <=> $numero1);

include 'includes/footer.php';