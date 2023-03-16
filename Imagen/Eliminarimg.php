<?php
include_once '../Login1/php/conexion.php';


  $id = $_GET['id'];

  $sql = "DELETE FROM imagen WHERE id_imagen='$id'";

  if (mysqli_query($conexion, $sql)) {
      echo "Imagen eliminada satisfactoriamente";
  } else {
      echo "Error al eliminar la imagen: " . mysqli_error($conexion);
  }

  mysqli_close($conexion);

?>


  

