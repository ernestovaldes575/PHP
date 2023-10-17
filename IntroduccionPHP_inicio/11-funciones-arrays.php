<?php include 'includes/header.php';

//? in_array === busca elementos en un arreglo

$carrito = ['Tablet', 'Computadora', 'Television'];

var_dump(in_array('Tablet', $carrito)); //True
var_dump(in_array('Audifonos', $carrito)); //False

//?Ordenar Elementos de un arreglo.
$numeros = array(1,5,4,2,3);
sort($numeros);//Menor a Mayor
rsort($numeros);//Mayor a Menor 

echo '<pre>';
var_dump($numeros);
echo '</pre>';

$cliente = [
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Ernesto'
];
asort($cliente); //Ordena por valores (orden alfabético)
ksort($cliente); //Ordena por Llaves (Orden Alfabetico)

echo '<pre>';
var_dump($cliente);
echo '</pre>';

include 'includes/footer.php';