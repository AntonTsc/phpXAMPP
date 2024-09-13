<?php
    /* Guarda en un array 10 numeros aleatorios entre 0 y 99 y sacar la media. */

    $nums = [];
    $suma = 0;

    for($i = 0; $i < 10; $i++){
        $nums[] += rand(0, 99);
        $suma += $nums[$i];
    }
    print_r($nums); // Para ver los números generados
    echo "<br><br> Media: " . $suma/count($nums);
?>