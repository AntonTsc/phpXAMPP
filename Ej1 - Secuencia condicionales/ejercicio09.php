<?php
    /* Definir dos notas en dos variables y calcular si la media es aprobada o suspendida. */

    $nota1 = 4;
    $nota2 = 5;
    $media = ($nota1 + $nota2) / 2;

    if($media >= 5){
        echo "Media APROBADA";
    } else{
        echo "Media SUSPENDIDA";
    }
?>