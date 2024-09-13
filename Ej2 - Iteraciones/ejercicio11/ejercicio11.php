<?php
    /* El servidor recibirá un número. Tenemos que sacar por pantalla todos los números primos que hay desde el 1 hasta ese número. */

    $num = $_GET["num"];

    function isPrimo($num){ //está mal esto
        $primo = true;

        for($i = $num-1; $i > 1; $i--){
            if($num % $i == 0){
                $primo = false;
            }
        }
        
        if($primo){
            echo $num . ", ";
        }
    }

    for($i = 1; $i < $num; $i++){
        isPrimo($num);
    }
?>