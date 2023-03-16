<?php

// Conexión a la base de datos
require_once "../Login1/php/conexion.php";

// Obtener los datos enviados por el formulario
$nombre = $_POST['nombre'];
$apellido_pat = $_POST['apellido_pat'];
$apellido_mat = $_POST['apellido_mat'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$rol_id = $_POST['rol_id'];

// Insertar el registro en la tabla de usuarios
if (!empty($password)) {
    $query = "INSERT INTO Usuarios (Nombre, ApellidoPat, ApellidoMat, usuario, password, Usuario_RolID) VALUES ('$nombre', '$apellido_pat', '$apellido_mat', '$usuario', '$password', $rol_id)";
} else {
    $query = "INSERT INTO Usuarios (Nombre, ApellidoPat, ApellidoMat, usuario, Usuario_RolID) VALUES ('$nombre', '$apellido_pat', '$apellido_mat', '$usuario', $rol_id)";
}

if (mysqli_query($conexion, $query)) {
    // Si la inserción fue exitosa, redirigir a la página de consulta
    header("Location: consultauser.php");
} else {
    // Si hubo un error en la inserción, mostrar mensaje de error
    echo "Error al insertar usuario: " . mysqli_error($conexion);
}


?>