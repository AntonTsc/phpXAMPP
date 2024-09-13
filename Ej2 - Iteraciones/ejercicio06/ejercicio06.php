<?php
    /* Elabore un programa que imprima la figura de un triángulo rectángulo de $numLineas lineas ajustada a la izquierda, formada por letras “o”. El valor del número de líneas se enviará al servidor mediante GET. */

    $ceros = "";
    $lineas = $_GET["lineas"];

    for($i=0; $i < $lineas; $i++){
        $ceros .= "o";
        echo $ceros . "<br />";
    }
?>