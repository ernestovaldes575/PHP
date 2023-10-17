<?php include 'includes/header.php';

$carrito = ['Tablet', 'Television', 'Computadora'];

//Util para ver los contenidos de un arreglo
echo "<pre>";
var_dump($carrito);
echo "</pre>";

//Acceder a un elemento en específico dentro de un arreglo en base a su indice.
echo $carrito[1];

//Agrega un elemento nuevo al arreglo siempre y cuando se sabe la posicion del elemento
$carrito[3] = 'Nuevo Producto';

//!Añade un elemento al final de un arreglo sin conocer el indice
array_push($carrito,'Elemento agregado al final de un arreglo');

//~Añade un elemento al principo de un arreglo
array_unshift($carrito, 'Elemento agregado al principo del arreglo');

echo "<pre>";
var_dump($carrito);
echo "</pre>";


include 'includes/footer.php';