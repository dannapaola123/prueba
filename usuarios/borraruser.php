<?php
// Conexión a la base de datos
require_once "../Login1/php/conexion.php";

// Obtener el ID del registro a eliminar
$id = $_GET['id'];

// Consulta de eliminación
$query = "DELETE FROM Usuarios WHERE Usuario_Id = $id";

// Ejecutar la consulta
if (mysqli_query($conexion, $query)) {
    // Si la eliminación fue exitosa, redirigir a la página de consulta
    header("Location: consultauser.php");
} else {
    // Si hubo un error en la eliminación, mostrar mensaje de error
    echo "Error al eliminar registro: " . mysqli_error($conexion);
}
?>
