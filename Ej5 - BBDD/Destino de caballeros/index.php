<?php
     $mysqli = new mysqli("localhost", "root", "", "destinocaballeros");
     $resultado = $mysqli->query("SELECT * FROM caballeros");

     //Hay que hacer un filtro en la parte superior de la pagina que salga un input, y una lupa, y que al darle la lupa, se recargue la pagina y te filtre la lista con los caballeros que en su nombre contengan lo que pongas en el string.

     //Tambien hay que hacer un select que sale una lista con todos los caballeros, y luego al seleccionarlo, y con un boton al lado y apretarlo, hace la misma funcion que el boton de ver, que visualiza todos los datos del caballero.
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Caballeros</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center mb-4">Lista de Caballeros</h1>
    <a href="form-insertar.php" class="btn btn-info btn-md">Insertar</a>
    
    <table class="table table-striped table-bordered">
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Fuerza</th>
                <th scope="col">Activo</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($row = $resultado->fetch_assoc()){
                ?>
                <tr>
                    <td><?=$row['id']?></td>
                    <td><?=$row['nombre']?></td>
                    <td><?=$row['fuerza']?></td>
                    <td><?php
                            if($row['activo'] == 1){
                                ?>
                                <span class="badge bg-success">Sí</span>
                                <?php
                            } else{
                                ?>
                                <span class="badge bg-danger">No</span>
                                <?php
                            }
                        ?>
                    </td>
                    <td>
                        <a href="ver.php?id=<?=$row['id']?>" class="btn btn-info btn-sm">Ver</a>
                        <a href="form-modificar.php?id=<?=$row['id']?>" class="btn btn-warning btn-sm">Modificar</a>
                        <a href="delete.php?id=<?=$row['id']?>" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
                <?php
            }
            $mysqli->close();
            ?>
        </tbody>
    </table>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>