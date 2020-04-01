<?php 



include('includes/conexion.php');

include('includes/header.php');



 ?>





 <div class="container">



 	<!-- FORMULARIO PARA NUEVO USUARIO -->

 	<hr>

 	<h1>CREAR NUEVA PELÍCULA</h1>



 	<form action="crear_pelicula.php" method="POST" enctype="multipart/form-data">

	  <div class="form-row">

	    <div class="col">

	      <input type="text" class="form-control" placeholder="Título" name="titulo">

	    </div>

	    <div class="col">

	      <input type="text" class="form-control" placeholder="Año" name="anio">

	    </div>

	     <div class="col">

	      <input type="file" class="form-control" placeholder="poster" name="poster">

	    </div>

	  </div>

	  <br>

	  <input type="submit" value="Crear nueva película">

	</form>

	<hr>



	<!-- FIN DE FORMULARIO PARA NUEVO USUARIO-->





	<!-- LISTA DE USUARIOS -->



	<h1>LISTADO DE PELÍCULAS</h1>



	<table class="table">

	  <thead class="thead-dark">

	    <tr>

	      <th scope="col">#id</th>

	      <th scope="col">TÍTULO</th>

	      <th scope="col">AÑO</th>

	      <th scope="col">POSTER</th>

	      <th scope="col">Editar</th>

	      <th scope="col">Borrar</th>

	    </tr>

	  </thead>

	  <tbody>



<?php 



	$consulta = mysqli_query($conexion, "SELECT * FROM peliculas");

	while ($temp = mysqli_fetch_assoc($consulta)) {

		echo "



		 <tr>

	      <th scope='row'>".$temp['id']."</th>

	      
	     

	      <td>".$temp['titulo']."</td>

	      <td>".$temp['anio']."</td>

	      

	      <td> 
	      	<img src='img/".$temp['poster']."' /> 
	      </td>

	      <td>

				<a href='editar_pelicula.php?id=".$temp['id']."'>

					<i class='fa fa-pencil' aria-hidden='true'></i>

				</a>

			</td>

	      	<td>

				<a href='borrar_pelicula.php?id=".$temp['id']."'>

					<i class='fa fa-trash' aria-hidden='true'></i>

				</a>

			</td>

	    </tr>





		";

	}



 ?>



	   

	  

	

	  </tbody>

	</table>



	



 </div>





 <?php 



 include('includes/footer.php');



  ?>