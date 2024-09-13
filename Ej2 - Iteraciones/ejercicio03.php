<?php
    /* Definir una variable llamada “pares” y asignarle un valor booleano.
    Si es true, mostrar en pantalla números pares del 1 al número aleatorio menor que 99 si se le ha asignado el valor FALSE a la variable pares en la pantalla tienen que aparecer los valores impares. */

    $pares = true;
    $numRandom = rand(1, 99);

    echo "Número random: " . $numRandom . "<br />";

    if($pares){
        for($num = 0; $num <= $numRandom; $num++){
            if($num % 2 == 0){
                echo " " . $num;
            }
        }
    } else {
        for($num = 0; $num <= $numRandom; $num++){
            if($num % 2 == 1){
                echo " " . $num;
            }
        }
    }
?>