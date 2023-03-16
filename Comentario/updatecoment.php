<?php
require_once "../Login1/php/conexion.php";

session_start();

if(!isset($_SESSION['usuario'])){
  header("Location: ../Login1/login.php");
  exit();
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $id_comentario = filter_input(INPUT_POST, 'id_comentario', FILTER_SANITIZE_NUMBER_INT);
  $comentario = filter_input(INPUT_POST, 'comentario', FILTER_SANITIZE_STRING);
  $fecha_comentario = filter_input(INPUT_POST, 'fecha_comentario', FILTER_SANITIZE_STRING);

  $update = "UPDATE comentario SET comentario='$comentario', fecha_comentario='$fecha_comentario' WHERE id_comentario=$id_comentario";
  mysqli_query($conexion, $update);

  header("Location: consultcoment.php");
  exit();
}
?>
