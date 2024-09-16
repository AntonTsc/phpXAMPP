<?php
    /* En el documento sale como que este ejercicio es el 12, pero lo pongo como el numero 11, ya que se lo salta

    Crea un array asociativo y ordenalo dependiendo del key y del valor. Para ello has de utilizar las funciones ksort y natsort. */

    $semana = array("lunes" => 10,
    "martes" => 20,
    "miercoles" => 30,
    "jueves" => 40,
    "viernes" => 50,
    "sabado" => 60,
    "domingo" => 70);

    echo natsort($semana)
?>