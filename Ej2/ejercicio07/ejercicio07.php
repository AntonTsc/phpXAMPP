<?php
    /* Realiza la suma desde un número (primerNum) hasta otro (ultimoNum). Los valores de los dos parámetros se enviarán por GET. */

    $primerNum = $_GET["primerNum"];
    $ultimoNum = $_GET["ultimoNum"];
    $numTotal = 0;
    echo "<b>For: </b>";
    for($primerNum; $primerNum <= $ultimoNum; $primerNum++){
        $numTotal += $primerNum;
    }
    echo $numTotal;
?>
