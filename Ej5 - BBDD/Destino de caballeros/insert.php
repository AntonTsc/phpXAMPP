<?php
    $nombre = $_GET['nombre'];
    $fuerza = $_GET['fuerza'];
    $ataque = $_GET['ataque'];
    $defensa = $_GET['defensa'];
    $experiencia = $_GET['experiencia'];

    //Fecha formateada
    $fecha_nacimiento = $_GET['fecha_nacimiento'];
    $dateObject = DateTime::createFromFormat('Y-m-d', $fecha_nacimiento);
    $fechaFormateada = $dateObject -> format('Y-m-d');

    $activo = $_GET['activo'];

    $mysqli = new mysqli("localhost", "root", "", "destinocaballeros");
    $sentencia = $mysqli->prepare("INSERT INTO caballeros(nombre, fuerza, ataque, defensa, experiencia, fecha_nacimiento, activo) VALUES (?,?,?,?,?,?,?)");
    $sentencia->bind_param("siiiisi", $nombre, $fuerza, $ataque, $defensa, $experiencia, $fechaFormateada, $activo);
    $sentencia->execute();
    $sentencia->close();

    header("Location: index.php");
?>