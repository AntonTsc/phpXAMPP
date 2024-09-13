<?php
    /* Guarda en un array 10 numeros aleatorios entre 0 y 99 y sacar la minima. */

    $nums = [];

    for($i = 0; $i < 10; $i++){
        $nums[] += rand(0, 99);
    }
    print_r($nums); // Para ver los números generados
    echo "<br><br>" . min($nums);
?>