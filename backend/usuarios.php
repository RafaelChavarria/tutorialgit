<?php 



include('includes/conexion.php');

include('includes/header.php');



 ?>





 <div class="container">



 	<!-- FORMULARIO PARA NUEVO USUARIO -->

 	<hr>

 	<h1>CREAR NUEVO USUARIO</h1>



 	<form action="crear_usuario.php" method="POST">

	  <div class="form-row">

	    <div class="col">

	      <input type="text" class="form-control" placeholder="Usuario" name="username">

	    </div>

	    <div class="col">

	      <input type="password" class="form-control" placeholder="Contraseña" name="password">

	    </div>

	     <div class="col">

	      <input type="email" class="form-control" placeholder="email" name="email">

	    </div>

	  </div>

	  <br>

	  <input type="submit" value="Crear nuevo usuario">

	</form>

	<hr>



	<!-- FIN DE FORMULARIO PARA NUEVO USUARIO-->





	<!-- LISTA DE USUARIOS -->



	<h1>LISTADO DE USUARIOS</h1>



	<table class="table">

	  <thead class="thead-dark">

	    <tr>

	      <th scope="col">#id</th>

	      <th scope="col">USERNAME</th>

	      <th scope="col">PASSWORD</th>

	      <th scope="col">EMAIL</th>

	      <th scope="col">Editar</th>

	      <th scope="col">Borrar</th>

	    </tr>

	  </thead>

	  <tbody>



<?php 



	$consulta = mysqli_query($conexion, "SELECT * FROM usuarios");

	while ($temp = mysqli_fetch_assoc($consulta)) {

		echo "



		 <tr>

	      <th scope='row'>".$temp['id']."</th>

	      <td>".$temp['username']."</td>

	      <td>".$temp['password']."</td>

	      <td>".$temp['email']."</td>

	      <td>

				<a href='editar_usuario.php?id=".$temp['id']."'>

					<i class='fa fa-pencil' aria-hidden='true'></i>

				</a>

			</td>

	      	<td>

				<a href='borrar_usuario.php?id=".$temp['id']."'>

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