<?php
    /* Se recibirá un dato llamado pares por GET que contendrá TRUE o FALSE.
    Si es TRUE, mostrar en pantalla números pares del 1 al número aleatorio menor que 99 si se le ha recibido  el valor FALSE en la pantalla tienen que aparecer los valores impares. */

    $pares = $_GET["pares"];
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