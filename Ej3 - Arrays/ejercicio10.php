<?php
    /* En este programa tendrás que utilizar un array asociativo para guardar como key cada día de la semana y asociar a cada día un valor entero. Se trandrá que mostrar en pantalla cada día y valor almacenado en el array así como la suma y media de todos los valores guadados en el array. */

    $suma = 0;
    $semana = array("lunes" => 10,
    "martes" => 20,
    "miercoles" => 30,
    "jueves" => 40,
    "viernes" => 50,
    "sabado" => 60,
    "domingo" => 70);

    foreach($semana as $dia => $num){
        $suma += $num;
        echo $dia . ": " . $num . "<br>";
    }

    echo "<br> Suma de todos los números: " . $suma . "<br> Media: " . $suma/7;
?>