<!DOCTYPE html>

<html>

<head>

	<title>Página de administración</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>





<!-- Barra de navegación -->

<div class="container">

	<nav class="navbar navbar-expand-lg navbar-light bg-light">

	  <a class="navbar-brand" href="#">Admin. Películas</a>

	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

	    <span class="navbar-toggler-icon"></span>

	  </button>



	  <div class="collapse navbar-collapse" id="navbarSupportedContent">

	    <ul class="navbar-nav mr-auto">

	      <li class="nav-item active">

	        <a class="nav-link" href="index.php">Inicio </a>

	      </li>

	      <li class="nav-item">

	        <a class="nav-link" href="usuarios.php">Usuarios <span class="sr-only">(current)</span></a>

	      </li>

	       <li class="nav-item">

	        <a class="nav-link" href="peliculas.php">Películas</a>

	      </li>

	      <li class="nav-item">

	        <a class="nav-link" href="directores.php">Directores</a>

	      </li>

	      <li class="nav-item">

	        <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">Contacto</a>

	      </li>

	      

	     

	    </ul>

	  </div>

	</nav>

</div>

<?php 
  
  if (isset($_GET['exito'])) {
    echo '

    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Mensaje enviado.</strong> Gracias por contactarnos, en breve tendrás noticias de nosotros.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    ';
  }

   if (isset($_GET['usuario'])) {
   	echo '
   		<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Usuario creado exitosamente.</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
   	';
   }
  
 ?> 	


<!-- Fin de barra de navegación-->

