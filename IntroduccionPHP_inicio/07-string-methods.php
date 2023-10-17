<?php include 'includes/header.php';

$nombreCliente = "Ernesto Valdes Lujano";

//Conocer la extension de un String contando espacios.
echo strlen($nombreCliente);

echo '<br>';

//Elimina los espacios en blanco = trim()
$texto = trim($nombreCliente);
echo $texto;
echo '<br>';
echo strlen($texto);

echo '<br>';
//Convertirlo a Mayusculas = stroupper
echo strtoupper($nombreCliente);

echo '<br>';
//Convertirlo a Minisculas = strtolower()
echo strtolower($nombreCliente);
echo '<br>';

$email1 = 'correo@correo1.com';
$email2 = 'CORREO@CORREO1.COM';
var_dump(strtolower($email1) === strtolower($email2));

echo '<br>';
//Cambiar un valor.
echo str_replace('Ernesto','N', $nombreCliente);

echo '<br>';
//Revisar si un String existe o No.
echo strpos($nombreCliente, 'Valdes');

echo '<br>';
//Concatenar existen dos maneras de concatenar en PHP
$tipoCliente = "Premium";
echo "El cliente ".$nombreCliente." es ".$tipoCliente;

echo '<br>';
echo "El cliente {$nombreCliente} es {$tipoCliente}";

include 'includes/footer.php';