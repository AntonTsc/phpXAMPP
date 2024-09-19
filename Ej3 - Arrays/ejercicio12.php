<?php
    /* En el documento sale como que este ejercicio es el 0, pero lo pongo como el numero 12
    
    Programa que guarde 50 números aleatorios (rango del 0 al 49) en una tabla, luego tiene que indicar cuántas veces aparece cada número en el array.*/

    $nums = array();

    for($i = 0; $i < 50; $i++){
        $nums[] += rand(0, 49);
    }

    /*foreach($nums as $num){
        $numsSimilitud += [$num];
        foreach($numsSimilitud as $ns){
            if($ns == $num){

            }
        }

        //echo "El número " . $num . "ha salido " . $veces . " veces";
    }*/
?>