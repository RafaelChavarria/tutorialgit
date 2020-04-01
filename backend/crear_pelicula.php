<?php 



include('includes/conexion.php');



$titulo = $_POST['titulo'];

$anio = $_POST['anio'];
$sinopsis = $_POST['sinopsis'];

//$poster = $_POST['poster'];

$poster = basename($_FILES["poster"]["name"]);


// INSERTAR EL ARCHIVO EN EL SERVIDOR Y BD
$target_dir = "img/";
$target_file =  $target_dir . basename($_FILES["poster"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// 1. REVISAR SI EL ARCHIVO YA EXISTE

if (file_exists($target_file)) {
    echo "Error, el archivo ya existe";
    $uploadOk = 0;
}

// 2. Verificar el tamaño del archivo
if ($_FILES["poster"]["size"] > 500000) {
   echo "Error, el archivo pesa más de 5MB";
    $uploadOk = 0;
}

   //
// 3. Permitir solo ciertas extensiones
if ($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'jpeg' && $imageFileType != 'gif') {
   echo "Error, solo se aceptan imágenes JPG, JPEG, PNG, GIF";
   $uploadOk = 0;
}

//Comprobación final

if ($uploadOk == 0) {
    echo "Ocurrió un error";
}else{
    //Pasó todas las comprobaciones
    if (move_uploaded_file($_FILES["poster"]["tmp_name"], $target_file)) {
        echo "El archivo se subió correctamente";
        $insert = mysqli_query($conexion, "INSERT INTO peliculas (titulo, anio, poster, sinopsis) VALUES ('$titulo', '$anio', '$poster', '$sinopsis')");
    }else{
        echo "No se pudo mover el achivo";
    }
}






if ($insert) {

	header('Location:peliculas.php');

}else{

	echo "Ocurrió un error";

}







 ?>