<?php
    /* 
    Hacer una página PHP que tenga dos variables y nos indique si la suma de los números es mayor que el producto (resultado de la multiplicación) de ellos o al contrario: Ejemplo:
    Numero1=1; numero2=2 —> “ la suma es mayor que el producto”
    Numero1=1; numero2=2 —>“ el producto es mayor que la suma” 
    */

    $num1 = 5;
    $num2 = 2;
    $suma = $num1 + $num2;
    $multiplicacion = $num1 * $num2;

    if($suma > $multiplicacion){
        echo "La suma es mayor que el producto";
    } else{
        echo "El producto es mayor que la suma";
    }
?>