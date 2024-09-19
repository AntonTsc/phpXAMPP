<?php
    /* En el documento sale como que este ejercicio es el 12, pero lo pongo como el numero 11, ya que se lo salta

    Crea un array asociativo y ordenalo dependiendo del key y del valor. Para ello has de utilizar las funciones ksort y natsort. */

    $users = array("jordi" => "Jordi Rubio",
    "marta" => "Marta Fabra",
    "eva" => "Eva Palacio",
    "toni" => "Antonio Comas",
    "emilio" => "Emilio Morales",
    "feo" => "Francisco Cascales");

    //ksort($users); //Ordenar por clave (letras)
    //natsort($users); //Ordenar por valor (numeros)

    echo "<h1>Array asociativo</h1><h3>Mostrar el array</h3><br>";
    foreach($users as $user => $valor){
        echo "$user <br> $valor" . "";
    }

    /*foreach($abc as $letra => $num){
        echo "$letra = $num <br>";
    }*/
        
?>