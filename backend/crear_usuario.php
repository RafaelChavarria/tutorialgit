<?php 



include('includes/conexion.php');



$username = $_POST['username'];

$password = $_POST['password'];

$email = $_POST['email'];



$insert = mysqli_query($conexion, "INSERT INTO usuarios (username, password, email) VALUES ('$username', '$password', '$email')");



if ($insert) {

	header('Location:usuarios.php?usuario=1');

}else{

	echo "Ocurrió un error";

}







 ?>