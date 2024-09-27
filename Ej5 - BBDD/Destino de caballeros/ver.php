<?php
    $id = $_GET['id'];
    $mysqli = new mysqli("localhost", "root", "", "destinocaballeros");
    $resultado = $mysqli->prepare("SELECT * FROM caballeros WHERE id=?");
    $resultado -> bind_param("i", $id);
    $resultado -> execute();
    $linea = $resultado -> get_result() -> fetch_assoc();

    $nombre = $linea['nombre'];
    $fuerza = $linea['fuerza'];
    $ataque = $linea['ataque'];
    $defensa = $linea['defensa'];
    $experiencia = $linea['experiencia'];
    $fecha_nacimiento = $linea['fecha_nacimiento'];
    $activo = $linea['activo'];

    $mysqli->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar caballero</title>
</head>
<body>
    
</body>
</html>