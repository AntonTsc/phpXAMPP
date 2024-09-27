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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de Caballero</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center mb-4">Formulario de Alta de Caballero</h1>
    
    <form action="modify.php" method="get">

        <!-- Input oculto para pasar el ID -->
         <input type="hidden" name="id" value="<?=$id?>">

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del Caballero</label>
            <input type="text" class="form-control" id="nombre" placeholder="Ingresa el nombre" name="nombre" value="<?=$nombre?>">
        </div>
        
        <div class="mb-3">
            <label for="fuerza" class="form-label">Fuerza</label>
            <input type="number" class="form-control" id="fuerza" placeholder="Ingresa el nivel de fuerza" name="fuerza" value="<?=$fuerza?>" required>
        </div>

        <div class="mb-3">
            <label for="ataque" class="form-label">Ataque</label>
            <input type="number" class="form-control" id="ataque" placeholder="Ingresa el nivel de ataque" name="ataque" value="<?=$ataque?>" required>
        </div>

        <div class="mb-3">
            <label for="defensa" class="form-label">Defensa</label>
            <input type="number" class="form-control" id="defensa" placeholder="Ingresa el nivel de defensa" name="defensa" value="<?=$defensa?>" required>
        </div>

        <div class="mb-3">
            <label for="experiencia" class="form-label">Experiencia</label>
            <input type="number" class="form-control" id="experiencia" placeholder="Ingresa la experiencia acumulada" name="experiencia" value="<?=$experiencia?>" required>
        </div>

        <div class="mb-3">
            <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="<?=$fecha_nacimiento?>" required>
        </div>

        <div class="mb-3">
            <label for="activo" class="form-label">¿Está activo?</label>
            <select class="form-select" id="activo" name="activo" required>
                <!-- Terminar esto con el if abreviado -->
                <option value="1" <?=$activo ? 'más grande' : 'más pequeño'?>>No</option>
                <option value="0" >Sí</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Modificar datos</button>
    </form>
    <form action="index.php">
        <button type="submit" class="btn btn-primary">Volver</button>
    </form>
    
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>