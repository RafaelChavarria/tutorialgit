<?php 



	include('includes/conexion.php');



	$id = $_GET['id'];
	
	// BORRAR ARCHIVO DEL SERVIDOR /////////////////////////////////////////

	$foto = mysqli_query($conexion, "SELECT *  FROM peliculas WHERE id=$id");
	while ($temp = mysqli_fetch_assoc($foto)) {
			$imagen = $temp['poster'];
		}	

		unlink("img/" . $imagen);
	////////////////////////////////////////////////////////////////////////

	$del = mysqli_query($conexion, "DELETE FROM -peliculas WHERE id = $id");



	if ($del) {

		header('Location:peliculas.php');

	}else{

		echo "Ocurrió un error";

	}





 ?>