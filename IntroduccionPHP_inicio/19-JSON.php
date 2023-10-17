<?php

$jsonContenido = [ ["nombre"=>"Ernesto", "Apellido"=>"Valdes"],
                    ["nombre"=>"José","Apellido"=>"Pérez"]];

    //JSON_ENCODE = Convierte un arreglo a un STRING.
    $resultado = json_encode($jsonContenido, JSON_UNESCAPED_UNICODE);

    print_r($resultado);

?>



