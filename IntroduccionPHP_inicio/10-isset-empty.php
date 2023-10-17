<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('Pedro', 'Juan', 'Karen');

//Arreglo Asociativo
$cliente = [
    'nombre' => 'Ernesto',
    'Edad' => 23
];

//~Empty === Revisa si un arreglo esta vacio.
var_dump(empty($clientes3));

echo '<br>';

//~Isset === Revisa si un arreglo esta creado.
var_dump(isset($clientes));
echo '<br>';
var_dump(isset($clientes4));
echo '<br>';
//~Isset === Permite revisar si una propiedad de un arreglo asociativo existe.
var_dump(isset($cliente['nombre'])); //Existe.
echo '<br>';
var_dump(isset($cliente['apellido'])); //No existe.

include 'includes/footer.php';