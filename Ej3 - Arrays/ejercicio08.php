<?php
    /* Tendremos los datos personales de 2 personas en 6 variables. Cada persona tendrá 3 datos:
    nombre, apellido y DNI.
    Hay que meter todos los datos en un array asociativo donde los índices sean “nombre”, “apellido”, “DNI” y después visualizarlos por pantalla en formato tabla. */

    //Persona 1
    $nombre = "Ibai";
    $apellido = "Amo";
    $dni = "1234567A";

    //Persona 2
    $nombre2 = "Robert";
    $apellido2 = "Rosu";
    $dni2 = "1294192B";

    $usuario1 = array("nombre" => $nombre,
        "apellido" => $apellido, 
        "dni" => $dni);

    $usuario2 = array("nombre" => $nombre2,
        "apellido" => $apellido2,
        "dni" => $dni2);
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
            foreach($usuario1 as $item => $value){
                echo "<th>" . $value . "</th>";
            }
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
                foreach($usuario2 as $item => $value){
                    echo "<th>" . $value . "</th>";
                }
                ?>
            </tr>
    </table>
</body>
</html>