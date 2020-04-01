<?php 

	include('includes/conexion.php');

	$id = $_GET['id'];

	$del = mysqli_query($conexion, "DELETE FROM usuarios WHERE id = $id");

	if ($del) {
		header('Location:usuarios.php');
	}else{
		echo "Ocurrió un error";
	}


 ?>