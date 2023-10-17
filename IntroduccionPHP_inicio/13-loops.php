<?php include 'includes/header.php';

//~ While se ejecuta hasta que una condición sea evaluada como falsa

$i = 0; //?Inicializador

while ($i <= 10) { //? Condicion
    # code...
    // echo $i . '<br>';

    $i++;   //? Incremento
}
echo '<br>';
//~ Do While se ejecuta hasta que una condición sea evaluada como falsa, primero ejecuta el codigo y despues lo evalua

$i = 0; //?Inicializador

do{
    // echo $i.'<br>';
    $i++;
}while($i <= 10);

//~For Loop Se ejecuta mientras que una condicion sea evaluda como verdadera
//!Ejercicio de numeros Pares con PHP
for ($i=1; $i <= 20; $i++) { 
    # code...
    if ($i % 2 === 0) {
        # code...
        // echo $i.'<br>'.'Son Pares';
    }
}
echo '<br>';
//*Ejercicio Fizz Buzz
/**
 * 3 Imprime Fizz
 * 5 Imprime Buzz
 * 3 y 5 Fizz Buzz
 */
for ($i=1; $i <= 50; $i++){
    if($i % 3 === 0 && $i % 5 === 0){
        echo 'FizzBuzz - '.$i.'<br>';
    }else if($i % 3 === 0){
        echo 'Fizz - '.$i.'<br>';
    }else if($i % 5 === 0){
        echo 'Buzz - '.$i.'<br>';
    }
}

echo '<br>';


include 'includes/footer.php';