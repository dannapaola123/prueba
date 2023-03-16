<?php
 include('../Login1/php/conexion.php');

 $descripcion = $_POST['descripcion'];
 

 $insertar = "INSERT INTO categoria (descripcion) VALUES ( '$descripcion')";
 //insertamos en la tabla preguntas
 if (mysqli_query($conexion, $insertar)) { //Se insertó correctamente
     $mensaje = "La pregunta se inserto correctamente";
 } else {
     $mensaje = "No se pudo insertar en la BD" . mysqli_error($conexion);
 }

 header('Location: concategoria.php');
 $conexion->close();
?>