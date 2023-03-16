<?php
  // Conexión a la base de datos
  require_once "../Login1/php/conexion.php";
  
  // Obtener los datos enviados por el formulario
  $usuario_id = $_POST['usuario_id'];
  $nombre = $_POST['nombre'];
  $apellido_pat = $_POST['apellido_pat'];
  $apellido_mat = $_POST['apellido_mat'];
  $usuario = $_POST['usuario'];
  $password = $_POST['password'];
  $rol_id = $_POST['rol_id'];

  // Verificar si se debe actualizar la contraseña
  if (!empty($password)) {
    $password = $_POST['password'];

    $datos = "UPDATE Usuarios SET Nombre='$nombre', ApellidoPat='$apellido_pat', ApellidoMat='$apellido_mat', usuario='$usuario', password='$password', Usuario_RolID=$rol_id WHERE Usuario_Id=$usuario_id";
  } else {
    $datos = "UPDATE Usuarios SET Nombre='$nombre', ApellidoPat='$apellido_pat', ApellidoMat='$apellido_mat', usuario='$usuario', Usuario_RolID=$rol_id WHERE Usuario_Id=$usuario_id";
  }

  // Ejecutar la consulta de actualización
  if (mysqli_query($conexion, $datos)) {
    // Si la actualización fue exitosa, redirigir a la página de consulta
    header("Location: consultauser.php");
  } else {
    // Si hubo un error en la actualización, mostrar mensaje de error
    echo "Error al actualizar usuario: " . mysqli_error($conexion);
  }
?>
