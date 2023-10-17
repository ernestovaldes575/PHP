<?php include 'includes/header.php';

$autenticado = false;
$admin = true;

//~ OR(||) Almenos uno debe cumplirse.
//~ AND(&&) Todos deben cumplirse.

if($autenticado || $admin){
    echo 'Usuario Autenticado Correctamente';
}else{  
    echo 'Usuario No Autenticado';
}

echo '<br>';

//? IF Anindado...
$cliente = [
    'nombre' => 'Ernesto',
    'saldo' => 500,
    'informacion' => [
        'Tipo' => 'Premium'
    ]
];

if(!empty($cliente)){
    echo 'El arreglo esta vacio';
    if($cliente['saldo'] > 100){
        echo 'El saldo del cliente es suficiente';
    }else{
        echo 'No hay saldo';
    }
}

echo '<br>';

if(isset($cliente)){
    echo 'El arreglo esta creado';
}else{
    echo 'El arreglo no esta creado';
}

echo '<br>';

//!Else if
if ($cliente['saldo'] > 1000) {
    # code...
    echo 'El Cliente tiene saldo';
}else if($cliente['informacion']['Tipo'] === 'Premium'){
    echo 'El cliente es Premium';
}else{
    echo 'No hay cliente definido o no tiene saldo.';
}

//!Switch   
echo '<br>';

$tecnologia = 'PHP';

switch($tecnologia){
    case 'PHP':
        echo 'PHP, el mejor lenguaje!';
    break;
    case 'JavaScript';
        echo 'JavaScript el lenguaje de la web';
    default:
        echo 'No es un lenguaje de Programacion';
}

include 'includes/footer.php';