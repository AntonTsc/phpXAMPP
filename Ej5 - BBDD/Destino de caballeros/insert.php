<?php
    $nombre = $_POST['nombre'];
    $fuerza = $_POST['fuerza'];
    $ataque = $_POST['ataque'];
    $defensa = $_POST['defensa'];
    $experiencia = $_POST['experiencia'];

    //Fecha formateada
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $dateObject = DateTime::createFromFormat('Y-m-d', $fecha_nacimiento);
    $fechaFormateada = $dateObject -> format('Y-m-d');

    $activo = $_POST['activo'];

    $mysqli = new mysqli("localhost", "root", "", "destinocaballeros");
    $sentencia = $mysqli->prepare("INSERT INTO caballeros(nombre, fuerza, ataque, defensa, experiencia, fecha_nacimiento, activo) VALUES (?,?,?,?,?,?,?)");
    $sentencia->bind_param("siiiisi", $nombre, $fuerza, $ataque, $defensa, $experiencia, $fechaFormateada, $activo);
    $sentencia->execute();
    $sentencia->close();

    header("Location: index.php");
?>