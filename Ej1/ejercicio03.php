<?php
    /* Define la constante PI y calcula el perímetro y superficie de un círculo cuyo radio es de 5cm. Guarde como ejercicio03.php */

    define("PI", pi());

    $perimetro = 2 * PI * 5;
    $superficie = PI * (5 * 5);

    echo "Perímetro: " . $perimetro . "<br /> Superficie: " . $superficie;
?>