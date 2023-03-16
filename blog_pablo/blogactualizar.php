<?php 
date_default_timezone_set('America/Mexico_City');
    include("../Login1/php/conexion.php");

    session_start();

    if(!isset($_SESSION['usuario'])){
      header("location: ../Login1/login.php");
      exit();
    }
    $id = $_GET['id'];

    $sql = "SELECT * FROM blog WHERE id_blog = $id";
    $query = mysqli_query($conexion, $sql);
    
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
                    <form action="blogupdate.php" method="POST">
                    
                                <input type="hidden" name="id_blog" value="<?php echo $mostrar['id_blog']  ?>">

                                <input type="date" class="form-control mb-3" name="fecha_creacion" placeholder="fecha creacion" value="<?php echo $mostrar['fecha_creacion']  ?>" min="<?php echo date('Y-m-d'); ?>">
                                
                                <input type="text" class="form-control mb-3" name="titulo" placeholder="titulo" value="<?php echo $mostrar['titulo']  ?>">

                           

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>