<?php
    /*  Definir un número en una variable  y decir a qué nota le corresponde.
        - Entre 1 y 4,9: suspenso
        - Entre 5 y 5,9: suficiente
        - Entre 6 y 6,9: bien
        - Entre 7 y 8,9: muy bien
        - Entre 9 y 10: sobresaliente
        - Si no ERROR. */

    $num = 5.6;

    if($num >= 1 && $num <= 4.9){
        echo "Suspenso";
    } else if ($num >= 5 && $num <= 5.9) {
        echo "Suficiente";
    } else if ($num >= 6 && $num <= 6.9) {
        echo "Bien";
    } else if ($num >= 7 && $num <= 8.9) {
        echo "Muy bien";
    } else if ($num >= 9 && $num <= 10) {
        echo "Sobresaliente";
    } else {
        echo "ERROR";
    }
?>