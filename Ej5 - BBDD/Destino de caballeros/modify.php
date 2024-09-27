<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $nombre = $_GET['nombre'];
        $fuerza = $_GET['fuerza'];
        $ataque = $_GET['ataque'];
        $defensa = $_GET['defensa'];
        $experiencia = $_GET['experiencia'];

        //Fecha formateada
        $fecha_nacimiento = $_GET['fecha_nacimiento'];
        $fechaFormateada = DateTime::createFromFormat('Y-m-d', $fecha_nacimiento) -> format('Y-m-d');

        $activo = $_GET['activo'];

        $mysqli = new mysqli("localhost", "root", "", "destinocaballeros");
        $sentencia = $mysqli->prepare("UPDATE caballeros SET nombre=?,fuerza=?,ataque=?,defensa=?,experiencia=?,fecha_nacimiento=?,activo=? WHERE id=?");
        $sentencia->bind_param("siiiisii", $nombre, $fuerza, $ataque, $defensa, $experiencia, $fechaFormateada, $activo, $id);
        $sentencia->execute();
        $sentencia->close();

        header("Location: index.php");
    }
?>