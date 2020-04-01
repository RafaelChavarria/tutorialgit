<?php 

$para = "rafael.chavarria@iberoleon.mx";
$asunto = "Mensaje de contacto";

$email = $_POST['email'];
$nombre = $_POST['nombre'];
$mensaje = $_POST['mensaje'];

$texto = "Mensaje de: " . $email . " | " . $nombre;
$texto .= "<br>";
$texto .= $mensaje;

mail($para, $asunto, $texto);

header("Location:index.php?exito=1");

 ?>