<?php
/* Tendremos los datos personales de 2 personas en 6 variables. Cada persona tendrá 3 datos:
    nombre, apellido y DNI.
    Hay que meter todos los datos en dos arrays ($usuario1, $usuario2) y después visualizarlos por pantalla en formato tabla. */

$nombre = "Antón";
$apellido = "Tschanz";
$dni = "12345678A";

$nombre2 = "Pablo";
$apellido2 = "Perucha";
$dni2 = "4219490P";

$usuario1 = array($nombre, $apellido, $dni);
$usuario2 = array($nombre2, $apellido2, $dni2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
        }
        tr,
        th {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <!-- Tabla persona 1 -->
    <table>
        <tr>
            <th colspan="3">Persona 1</th>
        </tr>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>DNI</th>
        </tr>
        <tr>
            <?php
            echo "<th>" . $usuario1[0] . "</th>";
            echo "<th>" . $usuario1[1] . "</th>";
            echo "<th>" . $usuario1[2] . "</th>";
            ?>
        </tr>
    </table><br><br>

    <!-- Tabla persona 2 -->
    <table>
            <tr>
                <th colspan="3">Persona 2</th>
            </tr>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>DNI</th>
            </tr>
            <tr>
                <?php
                echo "<th>" . $usuario2[0] . "</th>";
                echo "<th>" . $usuario2[1] . "</th>";
                echo "<th>" . $usuario2[2] . "</th>"; 
                ?>
            </tr>
    </table>
</body>
</html>