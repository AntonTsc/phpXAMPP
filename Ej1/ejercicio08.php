<?php
    /* Diseñar un programa que determine la cantidad total a pagar por una llamada telefónica de acuerdo a las siguientes premisas:
        - Toda llamada que dure menos de 3 minutos tiene un coste de 10 céntimos.
        - Cada minuto adicional a partir de los 3 primeros es un paso de contador y cuesta 5 céntimos. */

    $minutos = 5;
    $valor = .10;
    $valorExtra = .05;

    if($minutos < 3) {
        echo "Hay que pagar: " . $valor . "€";
    } else {
        $minutosExtra = $minutos - 3;
        $pago = $valor;
        $pagoExtra = $minutosExtra * $valorExtra;
        echo "Hay que pagar: " . ($pago + $pagoExtra) . "€";
    }
?>