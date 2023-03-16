<?php
include("../login1/php/conexion.php");
session_start();

if(!isset($_SESSION['usuario'])){
  header("location: contactanos.html");
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
    <link rel="shortcut icon" href="../../img/icono.ico"/>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/cont.css">

    <!-- CSS Base -->
    <link rel="stylesheet" class="back-color" href="css/style-light.css">
    <link rel="stylesheet" href="css/style-demo.css">
    
    
    <!-- Settings Style -->
    <link rel="stylesheet" class="posit-nav" href="css/settings/left-nav.css" />
    <link rel="stylesheet" class="theme-color" href="css/settings/green-color.css" />
    

    <title>Contactanos</title>
  </head>
  <body>
 
  <!--========================================================== -->
                        <!-- ENCABEZADO -->
  <!--========================================================== -->

  <header class="container-fluid bg-light d-flex justify-content-center">
  <nav  class="navbar navbar-expand-lg navbar-light p-2"  id="menu">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="../img/loguito.png" class="img-fluid p-1" alt="loguito">
          <span class="fs-5 text-primary fw-bold">Infonet UT</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../Index.php">Inicio</a>
          </li>
          <div class="dropdown">
            <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              Introducción
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="../introduccion/introduccion/requisitos.php">Prerrequsistos JAVA</a></li>
              <li><a class="dropdown-item" href="#">Próximamente otro lenguaje</a></li>
            </ul>
          </div>

          <div class="dropdown">
            <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              Biblioteca
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="../Bibloteca/Java/java1.php">Java</a></li>
              <li><a class="dropdown-item" href="#">Próximamente otro lenguaje</a></li>
            </ul>
          </div>

          <div class="dropdown">
            <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              Cursos
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="../Cursos/Cursos.php">Java</a></li>
              <li><a class="dropdown-item" href="#">Próximamente otro lenguaje</a></li>
            </ul>
          </div>

          <div class="dropdown">
            <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              Diviértete
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="../areas/juegos.php">Área de juegos</a></li>
              <li><a class="dropdown-item" href="../areas/terminal.php">Área de codificación</a></li>
            </ul>
          </div>

          <div class="dropdown">
            <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              Más
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="referencias.php">Referencias</a></li>
              <li><a class="dropdown-item" href="Acerca.php">Acerca de</a></li>
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
</header>
<header class="container-fluid bg-secondary d-flex justify-content-center">
  <p class="text-light mb-0 p-2 fs-5">Referencias&nbsp; &nbsp;&nbsp;</p>
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
                        <!-- Documentacion -->
  <!--========================================================== -->
      <div class="container-fluid">
        <h2>Referencias bibliograficas</h2>
        <p class="text-start">          
        </p>
    <ul>
      <li>
        Martin, R. C. (2012). Código limpio / Clean code: Manual de estilo para el desarrollo ágil de 
        software / A Handbook of Agile Software Craftsmanship (Tra ed.). Anaya Multimedia.
      </li> 
          <br>
      <li>
        Cormen, T. H., Leiserson, C. E., Rivest, R. L., & Stein, C. (2009). Introduction to Algorithms 
        (3rd ed.). MIT Press. 
      </li>
          <br>
      <li>
        Yábar, S. I. A., & Salazar, I. M. (2022). FUNDAMENTOS DE PROGRAMACIÓN Y DESARROLLO DE APLICACIONES EN JAVA: 
        Fundamentos de programación y algoritmos / Desarrollo de aplicaciones JAVA en consola / Creación de 
        formularios JAVA (Spanish Edition). Independently published. 
      </li>
          <br>
      <li>
        Sznajdleder, P. A. (2016). JAVA A FONDO: CURSO DE PROGRAMACION (3.a ed.). Alfaomega GPO. 
      </li>
          <br>
      <li>
        Battistutti, C. O. (2022). Aprende a programar en Java: de cero al infinito (1.a ed.). Marcombo. 
      </li>
        <br>
          <li>
        Vozmediano, A. M. (2017). Java para novatos: Cómo aprender programación orientada a objetos con 
        Java sin desesperarse en el intento (Volume 3) (Spanish Edition) (1. ed.). CreateSpace Independent 
        Publishing Platform.
      </li>
          <br>
      <li>
        Bernal Bermúdez, J. (2012, 9 enero). programación orientada a objetos con java (1.1 ed.). 
        universidad politécnica de Madrid. 
      </li>
          <br>
      <li>
        Bermón Angarita, L. (2021). Ejercicios de programación orientada a objetos con Java y uml 
        (Primera edición). Universidad Nacional de Colombia.
      </li>
    </ul>    
        <br>
        <br>
        <br>
      

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

  	<!-- All Script -->
    <script src="js/jquery.min.js"></script>
    <script src="js/main-demo.js"></script>
 

  </body>
</html>