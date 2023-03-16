<?php
include("../login1/php/conexion.php");
session_start();

if(!isset($_SESSION['usuario'])){
  header("location: ../Login1/login.php");
  exit();
}
$iduser = $_SESSION['usuario'];
$sql ="SELECT usuario, Nombre, ApellidoPat from usuarios where usuario = '$iduser'";
$resultado = $conexion->query($sql);
$row = $resultado->fetch_assoc();

?>


<!doctype html>
<html lang="en">
  <head>
    <link rel="shortcut icon" href="../img/icono.ico"/>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

    		<!-- Meta -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <title>Acerca De</title>
  

<!-- CSS Base -->
<link rel="stylesheet" class="back-color" href="../contactanos/css/style-light.css">
<link rel="stylesheet" href="../contactanos/css/style-demo.css">


<!-- Settings Style -->
<link rel="stylesheet" class="posit-nav" href="../contactanos/css/settings/left-nav.css" />
<link rel="stylesheet" class="theme-color" href="../contactanos/css/settings/green-color.css" />


  </head>
  <body>
 
  <!--========================================================== -->
                        <!-- ENCABEZADO -->
  <!--========================================================== -->

 
  <nav  class="navbar navbar-expand-lg navbar-light p-2"  id="menu">
	<div class="container">
	  <a class="navbar-brand" href="#">
		<img src="../blog2/img/loguito.png" class="img-fluid p-1" alt="loguito">
		  <span class="fs-5 text-primary fw-bold">InfoHelp UT</span>
	  </a>
	  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav me-auto mb-2 mb-lg-0">
		  <li class="nav-item">
			<a class="nav-link" aria-current="page" href="./../index.php">Inicio</a>
		  </li>

		  <div class="dropdown">
			<a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
			  Noticias
			</a>
			<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
			  <li><a class="dropdown-item" href="index.php">Noticias de calles inseguras</a></li>
			  <li><a class="dropdown-item" href="ws.php">JSON</a></li>
			</ul>
		  </div>

		  <div class="dropdown">
			<a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
			  Más
			</a>
			<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
			  <li><a class="dropdown-item" href="./../Acerca.php">Acerca de</a></li>
			</ul>
			
		</ul>
            
		<form class="d-flex">
            <div class="dropdown">
                <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">         
                <?php  echo utf8_decode($row['Nombre']); ?>
                  <img src="../img/undraw_profile.svg" alt="" width="40" height="34">
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <li><a class="dropdown-item" href="../Perfil/misdatos.php">Mis datos</a></li>
                  <li><a class="dropdown-item" href="../Login1/php/cerrar_session.php">Finalizar Sesión</a></li>
                </ul>
              </div>
            </form>
          </div>

        </div>
  </nav>
  
<header class="container-fluid bg-secondary d-flex justify-content-center">
  <p class="text-light mb-0 p-2 fs-5">Configura tu perfil&nbsp; &nbsp;&nbsp;</p>
</header>


  <!--========================================================== -->
                        <!-- Cambio de color -->
  <!--========================================================== -->
  <div class="style-options">
    <div class="toggle-btn">
        <span><i class="fas fa-cog"></i></span>
    </div>
    <div class="style-menu">

<div class="style-back p-2">
  <img src="../img/Sol-removebg-preview.png" class="img-fluid p-1" alt="loguito">
            <h4 class="mt-85 mb-10">Color de fondo</h4>
            <ul>
                <li><a href="css/style-light.css"><i class="far fa-lightbulb"></i>light</a></li>
                <li> <a href="css/style-dark.css"><i class="fas fa-moon"></i>Dark</a></li>
              </ul>
        </div>

    </div>
</div>

<!--========================================================== -->
                        <!-- CONTENIDO -->
 <!--========================================================== -->
  
 <h1 class= text-center>Mis Datos </h1>
 <div class="container mt-5">
 <div class="row"> 
 
 <div class="col-md-8">
 <table class="table " >
   <thead class="table-success table-striped" >
 
        <tr>
          
        <th scope="col">Nombre</th>
        <th scope="col">Apellido Paterno</th>
        <th scope="col">Apellido Materno</th>
        <th scope="col">Usuario</th>
        <th scope="col">Contraseña</th>
            <th></th>
                                        <th></th>
        </tr>
        </thead>

        
<?php
       
        $datos= "SELECT *  from usuarios where usuario = '$iduser'";
        $result = mysqli_query($conexion,$datos);
        while($mostrar=mysqli_fetch_array($result)){
        ?>

          <tr>  
            <td><?php echo $mostrar['Nombre']?>   </td>
            <td><?php echo $mostrar['ApellidoPat']?>    </td>
            <td><?php echo $mostrar['ApellidoMat']?>   </td>
            <td><?php echo $mostrar['usuario']?>   </td>
            <td><?php echo $mostrar['password']?>   </td>
            <th><a href="actualizar.php?id=<?php echo $mostrar['Usuario_Id'] ?>" class="btn btn-info">Editar</a></th>
          </tr>  
          <?php                    
        }
        ?>
        
    </table> 
    </div>
</div>
</div>

 


  <!--========================================================== -->
                        <!--Paginado-->
<!--========================================================== -->
           
<!--========================================================== -->
                        <!--FOOTER-->
<!--========================================================== -->


<footer class="w-100  d-flex  align-items-center justify-content-center flex-wrap">
  <p class="fs-5 px-3  pt-3">InfonetUT</p>
  <div id="iconos" >
      <a href="https://www.facebook.com/Infonet-UT-103025732469928/"><i class="bi bi-facebook"></i></a>
      <a href="#"><i class="bi bi-twitter"></i></a>
      <a href="#"><i class="bi bi-instagram"></i></a>  
  </div>
</footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> 
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="main.js"></script>
  </body>
</html>