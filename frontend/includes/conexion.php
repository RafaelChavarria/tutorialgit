<?php 

$conexion = mysqli_connect("localhost", "claseTecWeb", "TecWeb20*", "peliculas2020");

//Revisar la conexión
if (mysqli_connect_errno()) {
	echo "Ocurrió un error: " . mysqli_connect_error();
	exit();
}else{
	//echo "Conexión establecida";
}


 ?>