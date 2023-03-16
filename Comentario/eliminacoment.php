<?php
include('../Login1/php/conexion.php');

$id = $_GET['id'];

$sql = "DELETE FROM comentario WHERE id_comentario='$id'";

if (mysqli_query($conexion, $sql)) {
    // Si la eliminación se realizó correctamente, redirigimos a la página de categorías
    echo "<script>window.location = 'consultcoment.php';</script>";
} else {
    echo "Error al eliminar la categoria: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
