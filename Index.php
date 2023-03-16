<?php
include("./login1/php/conexion.php");
session_start();









$iduser = $_SESSION['usuario'];
$sql ="SELECT usuario, Nombre, ApellidoPat from usuarios where usuario = '$iduser'";
$resultado = $conexion->query($sql);
$row = $resultado->fetch_assoc();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <link rel="shortcut icon" href="img/icono.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Whatsapp/Whatsapp/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/main.css">


    <title>InfoHelp UT</title>
  </head>
  <body>
    
  <!--========================================================== -->
                        <!-- WHATSAPP -->
  <!--========================================================== -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <a href="https://api.whatsapp.com/send?phone=7443762483&text=Hola!%20tengo%20un%20problema." class="float" target="_blank">
  <i class="fa fa-whatsapp my-float"></i>
  </a>
    
  <!--========================================================== -->
                        <!-- ENCABEZADO -->
  <!--========================================================== -->
    <header class="container-fluid bg-primary d-flex justify-content-center">
      <p class="text-light mb-0 p-2 fs-5">Contactanos InfoHelpUT@gmail.com</p>
    </header> 
 
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
    
                <a class="btn-light nav-link" aria-current="page" href="Index.php">Inicio</a>
              </li>

              <div class="dropdown">
                <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                  Noticias
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                
                <li><a class="dropdown-item" href="./categoria/concategoria.php">Categoria</a></li>
                <li><a class="dropdown-item" href="entrada/entrada.php">Entrada</a></li>
                <li><a class="dropdown-item" href="Imagen/consultaimg.php">Imagen</a></li>
                <li><a class="dropdown-item" href="blog_pablo/blog.php">blog</a></li>
                <li><a class="dropdown-item" href="Comentario/consultcoment.php">Comentario</a></li>
                <li><a class="dropdown-item" href="usuarios/consultauser.php">Usuarios</a></li>
               
              </ul>
              </div>

             

              <div class="dropdown">
                <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                  Más
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                   <li><a class="dropdown-item" href="contactanos/Acerca.php">Acerca de</a></li>
                </ul>
              </div>

           
              </ul>
            <form class="d-flex">
            <div class="dropdown">
                <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">         
                <?php  echo utf8_decode($row['Nombre']); ?>
                  <img src="./img/undraw_profile.svg" alt="" width="40" height="34">
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <li><a class="dropdown-item" href="./perfil/misdatos.php">Mis datos</a></li>
                  <li><a class="dropdown-item" href="./login1/php/cerrar_session.php">Finalizar Sesión</a></li>
                </ul>
              </div>
            </form>
          </div>

        </div>
      </nav>

    <!--========================================================== -->
                        <!-- CARRUSEL DE IMAGENES-->
    <!--========================================================== -->
   
    <div id="carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="3000">
            <img src="./img/noticias5.webp" class="d-block w-100" alt="im1">
          </div>
          

          <div class="carousel-item" data-bs-interval="3000">
            <img src="./img/noticias4.jpg" class="d-block w-100" alt="im2">
          </div>
 

          <div class="carousel-item" data-bs-interval="3000">
            <img src="img/noticias3.jpg" class="d-block w-100" alt="im3">
          </div>
 
 
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel"  data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel"  data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>    
    
    
        
     
    <!--========================================================== -->
                        <!-- INTRODUCCION DE SERVICIOS-->
    <!--========================================================== -->
    
    <section class="d-flex flex-column justify-content-center align-items-center pt-5  text-center w-50 m-auto" id="intro">
    <h1 class="p-3 fs-2 border-top border-3">Un servicio educativo sobre<span class="text-primary"> Programación </span></h1>
     <p class="p-3  fs-4">
         <span class="text-primary">InfonetUT</span> es una aplicacion web, en la cual te ofrece cursos 
         con las herramientas necesarias para aprender sobre la programación.        
     </p>   
    </section>


    <section class="d-flex flex-column align-items-center video-fluid" id="video"> 
    <iframe width="560" height="315" src="https://www.youtube.com/embed/uGNGGTP4ntw?controls=0" 
    title="YouTube video player" frameborder="0" allow="accelerometer; 
    autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
     allowfullscreen></iframe>
   </section>

   <!--========================================================== -->
                        <!-- TIPOS DE SERVICIOS-->
    <!--========================================================== -->


<section class="w-100">
    <div class="row w-75 mx-auto" id="servicios-fila-1">       
        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
            <img src="./img/desarrollo.png" alt="Aprende"   width="180" height="160">

            <div>
                <h3 class="fs-5 mt-4 px-4 pb-1">Conectarse</h3>
                <p class="px-4">Conectate con los demas usuarios</p>
            </div>

        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start  my-5 icono-wrap">
            <img src="./img/ruta.png" alt="codifica" width="180" height="160">

            <div>
                <h3 class="fs-5 mt-4 px-4 pb-1 icono-wrap">Encontrar</h3>
                <p class="px-4">Buscar los lugares con mas riesgos en la zona

</p>
            </div>
        </div>   
    </div>
    
    <div class="row w-75 mx-auto mb-5" id="servicios-fila-2">       
        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start  my-5 icono-wrap">
            <img src="./img/in.png" alt="medida" width="180" height="160">

            <div>
                <h3 class="fs-5 mt-4 px-4 pb-1">En tiempo real </h3>
                <p class="px-4">Observa todo lo que pasa al momento</p>
				
          </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
            <img src="./img/ex.png" alt="Evaluación" width="180" height="160" >

            <div>
                <h3 class="fs-5 mt-4 px-4 pb-1">Evaluación&nbsp;</h3>
                <p class="px-4">&nbsp;Evaluar los tipos de entorno que hay en acapulco.&nbsp; &nbsp; &nbsp;</p>
          </div>
        </div>   
    </div>
</section>

<!--========================================================== -->
                        <!-- SECCION ACERCA DE NOSOTROS-->
<!--========================================================== -->

<section>
    <div class="container w-50 m-auto text-center" id="team">
        <h1 class="mb-5 fs-2">"Estamos <span class="text-primary">para informar</span> y <span class="text-primary">resguardar</span> la <span class="text-primary">proteccion</span>"</span>.</h1>
        
    </div>

    <div class="mt-5 text-center">
        <img src="./img/team.jpg" class="img-fluid" alt="team">
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