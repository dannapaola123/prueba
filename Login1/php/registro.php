<?php

include 'conexion.php';

$nombre_completo = $_POST['nombre_completo'];
$apellido_pa = $_POST['apellido_pa'];
$apellido_ma = $_POST['apellido_ma'];

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$rol_id = 2;
//encriptamiento de contraseña


$query = "INSERT INTO Usuarios(Usuario_RolID, Nombre,ApellidoPat, ApellidoMat, usuario, password) 
VALUES('$rol_id','$nombre_completo', '$apellido_pa', '$apellido_ma', '$usuario', '$contrasena')";






//verificar que el usuario no se repita en la base de datos
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Usuario_Id ='$usuario' ");

if(mysqli_num_rows($verificar_usuario) > 0){
    echo '
    <script>
        alert("este usuario ya esta registrado, intenta con otro diferente");
        window.location = "../login.php";
    </script>
    ';
    exit();
}


$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
        <script>
        alert("usuario almacenado exitosamente");
        window.location = "../login.php";
        </script>
    ';

}else{
    echo'
    <script>
        alert("intentalo de nuevo, usuario no almacendo");
        window.location = "../login.php";
        </script>
        ';
}

mysqli_close($conexion);
?>