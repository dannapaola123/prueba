<?php
include('../Login1/php/conexion.php');

$id = $_GET['id'];

$sql = "DELETE FROM entrada WHERE id_entrada='$id'";

if (mysqli_query($conexion, $sql)) {
    // Si la eliminación se realizó correctamente, redirigimos a la página de categorías
    echo "<script>window.location = 'entrada.php';</script>";
} else {
    echo "Error al eliminar la categoria: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
