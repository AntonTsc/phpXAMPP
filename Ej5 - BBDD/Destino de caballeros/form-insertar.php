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
    
    <form action="insert.php" method="post">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del Caballero</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el nombre" required>
        </div>
        
        <div class="mb-3">
            <label for="fuerza" class="form-label">Fuerza</label>
            <input type="number" class="form-control" id="fuerza" name="fuerza" placeholder="Ingresa el nivel de fuerza" required>
        </div>

        <div class="mb-3">
            <label for="ataque" class="form-label">Ataque</label>
            <input type="number" class="form-control" id="ataque" name="ataque" placeholder="Ingresa el nivel de ataque" required>
        </div>

        <div class="mb-3">
            <label for="defensa" class="form-label">Defensa</label>
            <input type="number" class="form-control" id="defensa" name="defensa" placeholder="Ingresa el nivel de defensa" required>
        </div>

        <div class="mb-3">
            <label for="experiencia" class="form-label">Experiencia</label>
            <input type="number" class="form-control" id="experiencia" name="experiencia" placeholder="Ingresa la experiencia acumulada" required>
        </div>

        <div class="mb-3">
            <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
        </div>

        <div class="mb-3">
            <label for="activo" class="form-label">¿Está activo?</label>
            <select class="form-select" id="activo" name="activo" required>
                <option value="1">Sí</option>
                <option value="0">No</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Dar de Alta</button>
    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>