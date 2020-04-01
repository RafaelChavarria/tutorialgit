

<?php 

	include ('includes/conexion.php');
	$id = $_GET['id'];


	$consulta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id=$id");
	while ($temp = mysqli_fetch_assoc($consulta)) {
		$username = $temp['username'];
		$password = $temp['password'];
		$email = $temp['email'];
	}
 ?>


<form action="editar_usuario_insert.php" method="POST">
	
	<label>id:</label>
	<br>
	<input type="text" name="id" readonly value="<?php echo $id; ?>">
	<br>

	<label>username:</label>
	<br>
	<input type="text" name="username" value="<?php echo $username; ?>">
	<br>

	<label>password:</label>
	<br>
	<input type="text" name="password" value="<?php echo $password; ?>">
	<br>

	<label>email:</label>
	<br>
	<input type="text" name="email" value="<?php echo $email; ?>">
	<br>

	<input type="submit" value="Editar usuario">


</form>