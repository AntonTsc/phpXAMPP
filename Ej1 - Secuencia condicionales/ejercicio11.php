<?php
    /* Contar vocales: Escribe un programa que reciba una cadena de texto y cuente cuántas vocales (a, e, i, o, u) tiene. */

    $texto = "Hola Mundo!";
    $letras = [ 'a', 'e', 'i', 'o', 'u'];
    $totalVocales = 0;

    //substr_count = cuenta cuantas veces aparece la letra en la palabra
    //strtolower() = convierte el texto en minúsculas para que no distinga entre mayúsculas y minúsculas, ya que 'A' y 'a' son tratadas como diferentes.
    foreach($letras as $letra){
        $totalVocales += substr_count(strtolower($texto), $letra);
    }
    if($totalVocales > 0){
        echo "La cadena de texto contiene $totalVocales vocales.";
    } else {
        echo "La cadena de texto no contiene ninguna vocal.";
    }
?>