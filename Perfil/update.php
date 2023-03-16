<?php
require_once "../Login1/php/conexion.php";

session_start();

if(!isset($_SESSION['usuario'])){
  header("Location: ../Login1/login.php");
  exit();
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
  $Nombre = filter_input(INPUT_POST, 'Nombre', FILTER_SANITIZE_STRING);
  $ApellidoPat = filter_input(INPUT_POST, 'ApellidoPat', FILTER_SANITIZE_STRING);
  $ApellidoMat = filter_input(INPUT_POST, 'ApellidoMat', FILTER_SANITIZE_STRING);
  $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
  $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

  $update = "UPDATE usuarios SET Nombre=?, ApellidoPat=?, ApellidoMat=?, password=? WHERE Usuario_Id=?";
  $stmt = mysqli_prepare($conexion, $update);
  mysqli_stmt_bind_param($stmt, "ssssi", $Nombre, $ApellidoPat, $ApellidoMat, $password, $id);
  mysqli_stmt_execute($stmt);

  $verificar_usuario = mysqli_prepare($conexion, "SELECT * FROM usuarios WHERE usuario=?");
  mysqli_stmt_bind_param($verificar_usuario, "s", $usuario);
  mysqli_stmt_execute($verificar_usuario);
  mysqli_stmt_store_result($verificar_usuario);
  $num_rows = mysqli_stmt_num_rows($verificar_usuario);

  if($num_rows > 0){
    echo '
    <script>
      alert("Datos cambiados exitosamente.");
      window.location = "./misdatos.php";
    </script>
    ';
    exit();
  }

  header("Location: misdatos.php");
  exit();
}
?>
