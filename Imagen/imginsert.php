<?php
include_once '../Login1/php/conexion.php';

if(isset($_POST['submit'])){
    $id_imagen = $_POST['id_imagen'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $id_blog = $_POST['id_blog']; // Agregado: obtener el valor de id_blog desde el formulario

    $sql = "INSERT INTO imagen (ruta, id_blog) VALUES ('$imagen',  $id_blog)"; // Modificado: agregar el valor de id_blog en la consulta SQL

    if (mysqli_query($conexion, $sql)) {
        echo "Imagen insertada satisfactoriamente";
    } else {
        echo "Error al insertar la imagen: " . mysqli_error($conexion);
    }
  
    mysqli_close($conexion);
  }
?>
<a href="consultaimg.php">
  <button type="button">regresar </button>
</a>

<form action="" method="POST" enctype="multipart/form-data">
  ID: <input type="hidden" name="id_imagen">
  <br>
  <!-- Agregado: campo para seleccionar la publicación de blog -->
  Publicación de blog:
  <select name="id_blog">
    <?php
      $query = "SELECT id_blog, titulo FROM blog";
      $result = mysqli_query($conexion, $query);
      while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['id_blog'] . "'>" . $row['titulo'] . "</option>";
      }
    ?>
  </select>
  <br>
  Imagen: <input type="file" name="imagen">
  <br>
    
  <input type="submit" name="submit" value="Agregar imagen">
</form>
