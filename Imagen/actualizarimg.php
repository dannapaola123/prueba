<?php
include_once '../Login1/php/conexion.php';

// Obtener los datos de la imagen a actualizar
if (isset($_GET['id'])) {
  $id_imagen = $_GET['id'];
  $query = "SELECT ruta FROM imagen WHERE id_imagen = $id_imagen";
 $result = mysqli_query($conexion, $query);
 $row = mysqli_fetch_array($result);
 $imagen_anterior = $row['ruta'];
 

  
  
 // Verificar si la imagen existe antes de actualizarla

} else {
  // Redirigir a la página de consulta de imágenes si no se proporciona un ID válido
  header('Location: consultaimg.php');
  exit();
}

if(isset($_POST['submit'])){
    $id_imagen = $_POST['id_imagen'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
   

   

    // Actualizar la imagen
    $sql = "UPDATE imagen SET ruta = '$imagen' WHERE id_imagen = $id_imagen";
    if (mysqli_query($conexion, $sql)) {
      // Eliminar la imagen anterior si la actualización se realizó correctamente
      if (!empty($imagen_anterior)) {
          if (file_exists($imagen_anterior)) {
              unlink($imagen_anterior);
          }
      }
      echo "Imagen actualizada satisfactoriamente";
  } else {
      echo "Error al actualizar la imagen: " . mysqli_error($conexion);
  }
  
    mysqli_close($conexion);
}


?>

<a href="consultaimg.php">
  <button type="button">regresar </button>
</a>

<form action="" method="POST" enctype="multipart/form-data">
  ID: <?php echo $id_imagen; ?>
  <input type="hidden" name="id_imagen" value="<?php echo $id_imagen; ?>">
  <br>

  <!-- <select name="id_blog">
  
      $query = "SELECT id_blog, titulo FROM blog";
      $result = mysqli_query($conexion, $query);
      while ($row = mysqli_fetch_array($result)) {
        $selected = ($row['id_blog'] == $id_blog) ? 'selected' : '';
        echo "<option value='" . $row['id_blog'] . "' $selected>" . $row['titulo'] . "</option>";
      }
    
  </select> -->
  <br>


  Nueva imagen: <input type="file" name="imagen">
  <br>


  <input type="submit" name="submit" value="Actualizar imagen">
</form>
