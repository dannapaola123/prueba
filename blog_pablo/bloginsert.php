<?php
  include('../Login1/php/conexion.php');
  session_start();

  if (isset($_POST['Guardar'])) {
    $fecha_creacion = $_POST['fecha_creacion'];
    $titulo = $_POST['titulo'];
    $id_categoria = $_POST['id_categoria'];
    $id_usuario = $_SESSION['Usuario_Id']; // obtener el ID del usuario que está iniciando sesión

    $insertar = "INSERT INTO blog (fecha_creacion, titulo, id_categoria, id_usuario) VALUES ( '$fecha_creacion', '$titulo', '$id_categoria', '$id_usuario')";

    if (mysqli_query($conexion, $insertar)) {
      $mensaje = "El blog se creó correctamente";
    } else {
      $mensaje = "Error al crear el blog: " . mysqli_error($conexion);
    }

    mysqli_close($conexion);
    header('Location: blog.php');
    
  }
?>
