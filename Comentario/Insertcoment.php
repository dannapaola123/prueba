<?php
 include('../Login1/php/conexion.php');


 $comentario = $_POST['comentario'];
 $fecha_comentario = $_POST['fecha_comentario'];
 $id_entrada = $_POST['id_entrada'];


 $insertar = "INSERT INTO comentario ( comentario,fecha_comentario, id_entrada) VALUES ( '$comentario', '$fecha_comentario', '$id_entrada')";
 //insertamos en la tabla preguntas
 if (mysqli_query($conexion, $insertar)) { //Se insertó correctamente
     $mensaje = "La pregunta se inserto correctamente";
 } else {
     $mensaje = "No se pudo insertar en la BD" . mysqli_error($conexion);
 }

 header('Location: consultcoment.php');
 $conexion->close();



?>
