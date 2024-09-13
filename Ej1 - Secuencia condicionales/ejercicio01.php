<?php
    /* Hacer un programa que contenga dos números distintos en sendas variables A continuación mostrar el resultado de la suma, la resta, la multiplicación, división y módulo. Guarde como ejercicio01.php. */

    $num1 = 20;
    $num2 = 10;

    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $multiplicacion = $num1 * $num2;
    $division = $num1 / $num2;
    $modulo = $num1 % $num2;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones</title>
</head>
<body>
    <?= "Suma: " . $suma 
    . "<br /> Resta: " . $resta 
    . "<br /> Multiplicación: " . $multiplicacion 
    . "<br /> División: " . $division 
    . "<br /> Modulo: " . $modulo ?>
</body>
</html>