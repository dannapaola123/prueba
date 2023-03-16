<?php
require_once "../Login1/php/conexion.php";

session_start();
$id_blog = $_POST['id_blog'];

if(!isset($_SESSION['usuario'])){
  header("Location: ../Login1/login.php");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id_blog = filter_input(INPUT_POST, 'id_blog', FILTER_SANITIZE_NUMBER_INT);
  $fecha_creacion = filter_input(INPUT_POST, 'fecha_creacion', FILTER_SANITIZE_STRING);
  $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);

  // Obtener id_usuario del blog
  $select_blog = "SELECT id_usuario FROM blog WHERE id_blog=?";
  $stmt_select_blog = mysqli_prepare($conexion, $select_blog);
  mysqli_stmt_bind_param($stmt_select_blog, "i", $id_blog);
  mysqli_stmt_execute($stmt_select_blog);
  mysqli_stmt_bind_result($stmt_select_blog, $id_usuario);
  mysqli_stmt_fetch($stmt_select_blog);
  mysqli_stmt_free_result($stmt_select_blog); // Liberar el conjunto de resultados

  // Verificar si el usuario tiene permiso para actualizar el blog
  if ($_SESSION['rol'] == 1 || $_SESSION['Usuario_Id'] == $id_usuario) {
    // El usuario actual tiene permiso para actualizar el blog
    $update = "UPDATE blog SET fecha_creacion=?, titulo=? WHERE id_blog=?";
    $stmt = mysqli_prepare($conexion, $update);
    mysqli_stmt_bind_param($stmt, "ssi", $fecha_creacion, $titulo, $id_blog);
    mysqli_stmt_execute($stmt);

    if (mysqli_affected_rows($conexion) > 0) {
      // Si la actualización se realizó correctamente, redirigimos a la página de blogs
      echo "<script>window.location = 'blog.php';</script>";
    } else {
      echo "Error al actualizar el blog: " . mysqli_error($conexion);
    }
  } else {
    // El usuario actual no tiene permiso para actualizar el blog
    echo '
    <script>
      alert("No tienes permiso para actualizar este blog.");
      window.location = "blog.php";
    </script>
    ';
    exit();
  }

  
  mysqli_close($conexion);
}
?>