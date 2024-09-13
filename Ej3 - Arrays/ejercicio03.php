<?php
    /* Para realizar este ejercicio copiar y renombrar el ejercicio02.
    Nuestra zapatería pondrá rebajas. Hay que cambiar los precios de todos los productos. La rebaja estará guardada en una variable y será un tanto por ciento. (20%, 50%,...) ejemplo: $rebaja = 20;
    Por pantalla se imprimirán los  productos con viejo y el precio nuevo, los nuevos precios se guardarán en el array de precios (al finalizar el programa el array de precios quedará con los los precios nuevos) */

    $productos = ["GPU", "CPU", "RAM", "MOTHERBOARD", "SSD"];
    $precios = [999, 250, 100, 80, 105];
    $rebaja = 47;

    for($i = 0; $i < count($productos); $i++){
        echo "Producto: " . $productos[$i] 
        . "<ul><li> Precio viejo: " . $precios[$i] . "€ </li>" 
        . "<li> Precio con descuento: " . $precios[$i] - ($precios[$i]*$rebaja)/100 . "€ </li></ul>";

        $productos[$i] = $precios[$i] - ($precios[$i]*$rebaja)/100;
    }

    var_dump($productos);
?>