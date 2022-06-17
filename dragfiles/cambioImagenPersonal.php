<?php 

require_once('conexion.php');
	session_start();

	
// Recibo los datos de la imagen
$nombre_img = $_FILES['myFile']['name'];
$tipo = $_FILES['myFile']['type'];
$tamano = $_FILES['myFile']['size'];

//Si existe imagen y tiene un tamaño correcto
if (!empty($nombre_img) && ($_FILES['myFile']['size'] <= 2000000)) 
{
   //indicamos los formatos que permitimos subir a nuestro servidor
   if (($_FILES["myFile"]["type"] == "image/gif")
   || ($_FILES["myFile"]["type"] == "image/jpeg")
   || ($_FILES["myFile"]["type"] == "image/jpg")
   || ($_FILES["myFile"]["type"] == "image/png"))
   {
      // Ruta donde se guardarán las imágenes que subamos
      $directorio = 'uploads/';
      // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
      move_uploaded_file($_FILES['myFile']['tmp_name'],$directorio.$nombre_img);
    } 
    else 
    {
       //si no cumple con el formato
       echo "No se puede subir una imagen con ese formato ";
    }
} 
else 
{
   //si existe la variable pero se pasa del tamaño permitido
   if($nombre_img == !NULL) echo "La imagen es demasiado grande "; 
}

try {
$sql = "INSERT INTO `tabla_imagenes` (`id`,`imagen`,`creado_el`) VALUES (null,'$nombre_img',CURRENT_TIMESTAMP) ";
$result = mysqli_query($connection, $sql);
echo "hola";

} catch (Exception $e) {
   echo $e;
}


/* volvemos a la página principal para cargar la imagen que hemos subido */
header("Location: drag.php");


 ?>