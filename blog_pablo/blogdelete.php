<?php
include('../Login1/php/conexion.php');

session_start();

if(!isset($_SESSION['usuario'])){
  header("Location: ../Login1/login.php");
  exit();
}

$id = $_GET['id'];

$select_blog = "SELECT id_usuario FROM blog WHERE id_blog=?";
$stmt_select_blog = mysqli_prepare($conexion, $select_blog);
mysqli_stmt_bind_param($stmt_select_blog, "i", $id);
mysqli_stmt_execute($stmt_select_blog);
mysqli_stmt_bind_result($stmt_select_blog, $id_usuario);
mysqli_stmt_fetch($stmt_select_blog);
mysqli_stmt_free_result($stmt_select_blog); // Free the result set

if ($_SESSION['rol'] == 1 || $_SESSION['Usuario_Id'] == $id_usuario) {
  // El usuario actual tiene permiso para eliminar el blog
  $sql = "DELETE FROM blog WHERE id_blog='$id'";

  if (mysqli_query($conexion, $sql)) {
      // Si la eliminación se realizó correctamente, redirigimos a la página de categorías
      echo "<script>window.location = 'blog.php';</script>";
  } else {
      echo "Error al eliminar la categoria: " . mysqli_error($conexion);
  }
} else {
  // El usuario actual no tiene permiso para eliminar el blog
  echo '
  <script>
    alert("No tienes permiso para eliminar este blog.");
    window.location = "blog.php";
  </script>
  ';
  exit();
}

mysqli_close($conexion);

?>

