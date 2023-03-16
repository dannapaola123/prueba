<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="insertusuario.php" method="post" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input required type="text" placeholder="Nombre(s)" name="nombre">
                        <input required type="text" placeholder="Apellido paterno" name="apellido_pat">
                        <input required type="text" placeholder="Apellido Materno" name="apellido_mat">
                        
            
                        <input required pattern="[a-zA-Z0-9]+" type="text" placeholder="Usuario" name="usuario">
                        <input  type="password" pattern="[a-zA-Z0-9]+" placeholder="Contraseña" name="password">
                        <select name="rol_id">
  <option value="">Seleccione el rol</option>
  <?php 
  include("../Login1/php/conexion.php");
    $query = "SELECT Rol_id, Rol_NOMBRE FROM Rol";
    $result = mysqli_query($conexion, $query);
    while ($row = mysqli_fetch_array($result)) { 
  ?>
    <option value="<?php echo $row['Rol_id']; ?>">
      <?php echo $row['Rol_NOMBRE']; ?>
    </option>
  <?php } ?>
</select>



                       <input type="submit" >
                    
                    </form>


</body>
</html>