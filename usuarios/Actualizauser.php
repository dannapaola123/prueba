<?php 
include("../Login1/php/conexion.php");

session_start();

if(!isset($_SESSION['usuario'])){
  header("location: ../Login1/login.php");
  exit();
}

if (!isset($_GET['id'])) {
    echo "No se proporcionó el ID del usuario";
    exit;
}

$id = $_GET['id'];

// consulta para obtener los datos del usuario
$sql = "SELECT * FROM usuarios WHERE Usuario_Id='$id'";
$query = mysqli_query($conexion,$sql);
$mostrar = mysqli_fetch_array($query);


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                <form action="updateuser.php" method="POST">
  <label for="nombre">Nombre:</label>
  <input type="text" name="nombre" value="<?php echo $mostrar['Nombre']; ?>">

  <label for="apellido_pat">Apellido paterno:</label>
  <input type="text" name="apellido_pat" value="<?php echo $mostrar['ApellidoPat']; ?>">

  <label for="apellido_mat">Apellido materno:</label>
  <input type="text" name="apellido_mat" value="<?php echo $mostrar['ApellidoMat']; ?>">

  <label for="usuario">Usuario:</label>
  <input type="text" name="usuario" value="<?php echo $mostrar['usuario']; ?>">

  <label for="password">Contraseña:</label>
  <input type="text" name="password" value="<?php echo $mostrar['password']; ?>" >

  <label for="rol_id">Rol:</label>
  <select name="rol_id">
    <?php 
          $query = "SELECT Rol_id, Rol_NOMBRE FROM Rol";
          $result = mysqli_query($conexion, $query);
          while ($row = mysqli_fetch_array($result)) { ?>
      <option value="<?php echo $row['Rol_id']; ?>" <?php if ($mostrar['Usuario_RolID'] == $row['Rol_id']) { echo 'selected'; } ?>>
        <?php echo $row['Rol_NOMBRE']; ?>
      </option>
    <?php } ?>
  </select>

  <input type="hidden" name="usuario_id" value="<?php echo $mostrar['Usuario_Id']; ?>">
  <input type="submit" value="Actualizar">
</form>

                    
                </div>
    </body>
</html>