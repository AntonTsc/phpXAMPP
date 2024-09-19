<?php
    /* En el documento sale como que este ejercicio es el 12, pero lo pongo como el numero 11, ya que se lo salta

    Crea un array asociativo y ordenalo dependiendo del key y del valor. Para ello has de utilizar las funciones ksort y natsort. */

    $users = array("jordi" => "Jordi Rubio",
    "marta" => "Marta Fabra",
    "eva" => "Eva Palacio",
    "toni" => "Antonio Comas",
    "emilio" => "Emilio Morales",
    "feo" => "Francisco Cascales");

    echo "<h1>Array asociativo</h1><h2>Mostrar el array</h2>";
    foreach($users as $user => $valor){
        echo "$user <br>";
        $padding = 10;
        if ($padding > 0) {
            echo str_repeat("&nbsp;", $padding);
        }

        echo "$valor <br>";
    }

    echo "<h2>Ordenar por la clave</h2>";
    ksort($users); //Ordenar por clave (letras)
    foreach($users as $user => $valor){
        echo "$user <br>";
        $padding = 10;
        if ($padding > 0) {
            echo str_repeat("&nbsp;", $padding);
        }

        echo "$valor <br>";
    }

    echo "<h2>Ordenar por contenido</h2>";
    natsort($users); //Ordenar por valor (numeros)
    foreach($users as $user => $valor){
        echo "$user <br>";
        $padding = 10;
        if ($padding > 0) {
            echo str_repeat("&nbsp;", $padding);
        }

        echo "$valor <br>";
    }
?>