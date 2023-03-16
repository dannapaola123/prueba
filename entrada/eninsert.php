<?php
 include('../Login1/php/conexion.php');


 $texto_entrada = $_POST['texto_entrada'];
 $id_blog = $_POST['id_blog'];


 $insertar = "INSERT INTO entrada ( texto_entrada, id_blog) VALUES ( '$texto_entrada', '$id_blog')";
 //insertamos en la tabla preguntas
 if (mysqli_query($conexion, $insertar)) { //Se insertó correctamente
     $mensaje = "La pregunta se inserto correctamente";
 } else {
     $mensaje = "No se pudo insertar en la BD" . mysqli_error($conexion);
 }

 header('Location: entrada.php');
 $conexion->close();



?>

