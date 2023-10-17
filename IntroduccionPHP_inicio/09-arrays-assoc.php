<?php include 'includes/header.php';

//~Los arreglos asociativos son lo equivalente a los objetos en JavaScript.
//?En lugar de acceder a ellos por medio de su indice, accedemos a ellos por medio de una propiedad.

$cliente = [
    'nombre' => 'Ernesto',
    'apellido' => 'Valdes',
    'edad' => 23,
    'informacion' => [
        'Tipo' => 'VIP' 
    ]
]; 

echo "<pre>";
var_dump($cliente['informacion']['Tipo']);
echo "</pre>";

//?Accedemos a cada uno de ellos por medio de su propiedad.
//echo $cliente['nombre'];   
//echo $cliente['edad'];
//echo $cliente['informacion']['Tipo'];

//?Agregar elementos al Arreglo Asociativo
$cliente['codigo'] = 109274910;

echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';