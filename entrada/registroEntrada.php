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
    <a href="entrada.php"> <button>volver</button>   </a>
<h1>Entrada </h1> <br> </br>
<form  method="POST" action="eninsert.php">
    
    <label for="Rol">id</label>
    <input  type="hidden" id="id_entrada" name="id_entrada" placeholder="id" > <br> </br>
 
    <label for="ID">descripcion</label>
    <input  type="text" id="texto_entrada" name="texto_entrada" placeholder="texto_entrada" > <br> </br>

    <label for="blog">Blog titulo:</label>
    <select id="id_blog" name="id_blog">
    <?php
    include("../login1/php/conexion.php");
      $query = "SELECT id_blog, titulo FROM blog";
      $result = mysqli_query($conexion, $query);
      while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['id_blog'] . "'>" . $row['titulo'] . "</option>";
      }
    ?>
  </select><br>
<input type="submit" name="submit" value="Agregar ">
    

</body>

</html>