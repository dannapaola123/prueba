<?php 
date_default_timezone_set('America/Mexico_City');
session_start();

include('../Login1/php/conexion.php');
$id_usuario = $_SESSION['Usuario_Id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Blog</title>
</head>
<body>
<form action="bloginsert.php" method="POST">
    <label for="titulo">Título:</label>
    <input type="text" id="titulo" name="titulo"><br>

    <label for="fecha_creacion">Fecha de creación:</label>
    <input type="date" id="fecha_creacion" name="fecha_creacion" min="<?php echo date('Y-m-d'); ?>"><br>

    <label for="categoria">Categoría:</label>
    <select id="categoria" name="id_categoria">
        <?php
        $sql = "SELECT * FROM categoria";
        $result = mysqli_query($conexion, $sql);

        while($row = mysqli_fetch_assoc($result)) {
            echo "<option value='" . $row['id_categoria'] . "'>" . $row['descripcion'] . "</option>";
        }
        ?>
    </select><br>

    <input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>"> <!-- Campo oculto para el id_usuario -->

    <input type="submit" name="Guardar" value="Guardar">
</form>
  
</body>
</html>
