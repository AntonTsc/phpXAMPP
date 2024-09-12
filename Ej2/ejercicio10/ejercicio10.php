<?php
    /*El servidor recibirá un número. El programa tendrá que decirnos si es primo o no. */

    $num = $_GET["num"];
    $primo = true;

    for($i = $num-1; $i > 1; $i--){
        if($num % $i == 0){
            $primo = false;
        }
    }
    
    if($primo){
        echo "El número " . $num . " es primo";
    } else {
        echo "El número no es primo";
    }
?>