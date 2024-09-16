<?php
    /* Crear un array asociativo con los nombres de meses como índice y los números de los días valor. 
    A continuación mostrar en pantalla. */

    $meses = array("enero" => 31,
    "febrero" => 28,
    "marzo" => 31,
    "abril" => 30,
    "mayo" => 31,
    "junio" => 30,
    "julio" => 31,
    "agosto" => 31,
    "septiembre" => 30,
    "octubre" => 31,
    "noviembre" => 30,
    "diciembre" => 31);

    foreach($meses as $mes => $dias){
        echo $mes . ": " . $dias . "<br>";
    }
?>