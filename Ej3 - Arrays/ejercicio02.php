<?php
    /* En una zapatería sólo se venden 5 productos. Tengo los productos y los precios guardados en 2 arrays (en uno los productos y en otro los precios). Hay que visualizar cada producto con su precio. */

    $productos = ["GPU", "CPU", "RAM", "MOTHERBOARD", "SSD"];
    $precios = [999, 250, 100, 80, 105];

    for($i = 0; $i < count($productos); $i++){
        echo "Producto: " . $productos[$i] . ", precio: " . $precios[$i] . "€ <br>";
    }
?>