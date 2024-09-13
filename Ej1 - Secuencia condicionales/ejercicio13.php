<?php
    /* Palíndromo: Escribe un programa que determine si una palabra es un palíndromo (se lee igual de adelante hacia atrás). */

    $palabra = "Neuquen";

    if(strtolower($palabra) == strrev(strtolower($palabra))){
        echo "La palabra <b>" . $palabra . "</b> es palíndromo";
    } else {
        echo "La palabra <b>" . $palabra . "</b> no es palíndromo";
    }
?>