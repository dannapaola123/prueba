<?php 
    include("../Login1/php/conexion.php");

    session_start();

    if(!isset($_SESSION['usuario'])){
      header("location: ../Login1/login.php");
      exit();
    }
    $id=$_GET['id'];

$sql="SELECT * FROM entrada WHERE id_entrada = $id";
$query=mysqli_query($conexion,$sql);

$mostrar=mysqli_fetch_array($query);
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
                    <form action="enupdate.php" method="POST">
                    
                                <input type="hidden" name="id_entrada" value="<?php echo $mostrar['id_entrada']  ?>">

                                <input type="text" class="form-control mb-3" name="texto_entrada" placeholder="texto_entrada" value="<?php echo $mostrar['texto_entrada']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>