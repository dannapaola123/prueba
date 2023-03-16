

<?php

    session_start();

    include 'conexion.php';

    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
 

    $validar_login = mysqli_query($conexion, "SELECT u.Usuario_Id, u.Usuario_RolID, r.Rol_NOMBRE FROM usuarios u 
    JOIN rol r ON u.Usuario_RolID = r.Rol_id
    WHERE u.usuario='$usuario' 
    and u.password='$contrasena'");

if(mysqli_num_rows($validar_login) > 0){
    $row = mysqli_fetch_assoc($validar_login);
 
    $_SESSION['Usuario_Id'] = $row['Usuario_Id']; // Agrega el usuario_id a la sesión
    $_SESSION['usuario'] = $usuario;
    $_SESSION['rol'] = $row['Usuario_RolID'];
    if($row['Usuario_RolID'] == 1) {
        header("location: ../../index.php");
    } else {
        header("location: ../../index.php");
    }
    exit;
} else {
    echo '
    <script>
        alert("usuario no existe, por favor verifique los datos introducidos");
        window.location = "../login.php";
    </script>
    ';
    exit;
}