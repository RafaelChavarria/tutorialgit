<?php 

$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

include('includes/conexion.php');

echo $id . "<br>";
echo $username . "<br>";
echo $password . "<br>";
echo $email . "<br>";

$update = mysqli_query($conexion, "UPDATE usuarios SET username = '$username', password = '$password', email = '$email' WHERE id= $id");

if ($update) {
	header("Location:usuarios.php");
}else{
	echo "Error: " . mysqli_error($conexion);;
}

 ?>