<?php
require_once "../Login1/php/conexion.php";

session_start();

if(!isset($_SESSION['usuario'])){
  header("Location: ../Login1/login.php");
  exit();
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $id_entrada = filter_input(INPUT_POST, 'id_entrada', FILTER_SANITIZE_NUMBER_INT);
  $texto_entrada = filter_input(INPUT_POST, 'texto_entrada', FILTER_SANITIZE_STRING);



  $update = "UPDATE entrada SET texto_entrada='$texto_entrada' WHERE id_entrada=$id_entrada";
  mysqli_query($conexion, $update);

  header("Location: entrada.php");
  exit();
}
?>