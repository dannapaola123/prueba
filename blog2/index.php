
<?php

    include "logic.php";

?>

<?php
session_start();
include("../login1/php/conexion.php");
if(!isset($_SESSION['usuario'])){
    echo'
    <script>
        alert(" por favor debes iniciar sesion");
        window.location = "../Login1/login.php";
    </script>';
    session_destroy();
    die();
}
$iduser = $_SESSION['usuario'];
$sql ="SELECT usuario, Nombre from usuarios where usuario = '$iduser'";
$resultado = $conexion->query($sql);
$row = $resultado->fetch_assoc();
?>



<!DOCTYPE html> 
<html lang="es">
<head>
	<meta charset="UTF-8">

	 <!-- Required meta tags -->
	 <link rel="shortcut icon" href="../img/icono.ico">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

	<title>InfoHelp UT</title>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
 <!--========================================================== -->
                        <!-- ENCABEZADO -->
  <!--========================================================== -->
 
  <nav  class="navbar navbar-expand-lg navbar-light p-2"  id="menu">
	<div class="container">
	  <a class="navbar-brand" href="#">
		<img src="img/loguito.png" class="img-fluid p-1" alt="loguito">
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
			  <li><a class="dropdown-item" href="./../contactanos/Acerca.php">Acerca de</a></li>
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
  <p class="text-light mb-0 p-2 fs-5">Disfruta de los cursos disponibles para tí.&nbsp; &nbsp;&nbsp;</p>
</header>

<!--========================================================== -->
                        <!-- CARRUSEL DE IMAGENES-->
    <!--========================================================== -->
   


 <!--========================================================== -->
                        <!-- TITULO DE CURSOS-->
    <!--========================================================== -->


    <section class="d-flex flex-column justify-content-center align-items-center pt-5  text-center w-50 m-auto" id="intro">
		<h1 class="p-3 fs-2 border-top border-3">Checa las problemáticas en las diferentes <span class="text-primary"> calles </span></h1>
		</section>
	
	
	<!--========================================================== -->
							<!-- TARJETAS -->
	<!--========================================================== --> 



<div class="container mt-5">

	<!-- Display any info -->
	<?php if(isset($_REQUEST['info'])){ ?>
		<?php if($_REQUEST['info'] == "added"){?>
			<div class="alert alert-success" role="alert">
			La publicación ha sido añadida con éxito
			</div>
		<?php }?>
	<?php } ?>

	<!-- Create a new Post button -->
	<div class="text-center">
		<a href="create.php" class="btn btn-outline-dark">+ Crear una nueva publicación</a>
	</div>

	<!-- Display posts from database -->

	<div class="row">
            <?php foreach($query as $q){ ?>
                <div class="col-12 col-lg-4 d-flex justify-content-center">
                    <div class="card text-white bg-dark mt-5" style="width: 18rem;">
					<img src= "img/<?php echo $q['foto2'];?>" class="card-img-top" alt="...">
                        <div class="card-body">
                    		 
                    <h5 class="card-title"><?php echo $q['title'];?></h5>
                    <p class="card-text"><?php echo substr($q['content'], 0, 50);?>...</p>
                    <a href="view.php?id=<?php echo $q['id']?>" class="btn btn-light">Lee más <span class="text-danger">&rarr;</span></a>

										
						</div>
                    </div>
                </div>
            <?php }?>
        </div>

	

        </div>
	
	</div>

       
<!--========================================================== -->
                        <!-- SECCION ACERCA DE NOSOTROS-->
<!--========================================================== -->

<section>
    <div class="container w-75 m-auto text-center " id="leng">
        <h1 class="mb-5 p-2 fs-5"><span class="text-primary"></span>  <span class="text-primary"></span>.</h1>
        <p class="fs-4 "><br>"Cuídate con InfoHelp UT"</br> </p>
      </div>
    <div id="local" class="border-top border-2">
    </div>

</section>

<!--========================================================== -->
                        <!--FOOTER-->
<!--========================================================== -->


<footer class="w-100  d-flex  align-items-center justify-content-center flex-wrap">
	<p class="fs-5 px-3  pt-3">InfonetUT</p>
	<div id="iconos" >
		<a href="#"><i class="bi bi-facebook"></i></a>
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