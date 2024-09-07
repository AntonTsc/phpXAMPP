<?php
    /* Tengo un billete de avión para Denver definir la variable dataSalida (fecha y hora). Necesito que el programa que calcule tiempo me falta para coger dicho avión, dependiendo de la hora actual. */

    date_default_timezone_set("Europe/Madrid");

    $dataSalida = new DateTime('2024-09-10 02:09');
    $dataActual = new DateTime();

    $tiempoRestante = date_diff($dataSalida, $dataActual);

    if($dataActual < $dataSalida){
        echo "El tiempo restante para coger el avión es de: " . $tiempoRestante->format("%y años, %m meses, %d días, %h horas y %i minutos.");
    } else {
        echo "Has perdido el vuelo.";
    }
?>