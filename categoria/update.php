<?php
require_once "../Login1/php/conexion.php";

session_start();

if(!isset($_SESSION['usuario'])){
  header("Location: ../Login1/login.php");
  exit();
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $id_categoria = filter_input(INPUT_POST, 'id_categoria', FILTER_SANITIZE_NUMBER_INT);
  $descripcion = filter_input(INPUT_POST, 'descripcion', FILTER_SANITIZE_STRING);

  $update = "UPDATE categoria SET descripcion=? WHERE id_categoria=?";
  $stmt = mysqli_prepare($conexion, $update);
  mysqli_stmt_bind_param($stmt, "si", $descripcion, $id_categoria); // Corregido
  mysqli_stmt_execute($stmt);

  header("Location: concategoria.php");
  exit();
}
?>
