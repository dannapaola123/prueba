<?php date_default_timezone_set('America/Mexico_City');?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea</title>
    <link rel="stylesheet" href="./estilos.css">

   
    
</head>
<body>

   
    
    <section></section>
    <a href="consultcoment.php"> <button>volver</button>   </a>
<h1>Comentario </h1> <br> </br>
<form  method="POST" action="insertcoment.php">
    
    <label for="Rol">id</label>
    <input  type="hidden" id="id_comentario" name="id_comentario" placeholder="id" > <br> </br>
 
    <label for="ID">Comentario</label>
    <input  type="text" id="comentario" name="comentario" placeholder="comentario" > <br> </br>

    <label for="fecha_comentario">Fecha de creación:</label>
    <input type="date" id="fecha_comentario" name="fecha_comentario" min="<?php echo date('Y-m-d'); ?>"><br>

    <label for="blog">entrada:</label>
    <select id="id_entrada" name="id_entrada">
    <?php
    include("../login1/php/conexion.php");
      $query = "SELECT id_entrada, texto_entrada FROM entrada";
      $result = mysqli_query($conexion, $query);
      while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['id_entrada'] . "'>" . $row['texto_entrada'] . "</option>";
      }
    ?>
  </select><br>
<input type="submit" name="submit" value="Agregar ">
    

</body>

</html>