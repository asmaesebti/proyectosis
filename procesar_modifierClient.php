<?php 
session_start();
require_once('conexion.php');

mysqli_query($connection,"SET CHARACTER SET 'utf8'");
mysqli_query($connection,"SET SESSION collation_connection ='utf8_unicode_ci'");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];


$nombre = html_entity_decode($nombre, ENT_QUOTES | ENT_HTML401, "UTF-8");


// $mode_paiment = $_POST['mode_paiment'];


//Actualizar los datos 

$actualizar = "UPDATE usuarios SET nombre = '$nombre', apellidos = '$apellidos', email = '$email', telefono = '$telefono'  WHERE id = '$id'";


$query = mysqli_query($connection, $actualizar);

if ($query) {
	// echo "<script> alert('Se han actualizado los cambios correctamente');
	// location.href = 'laListe.php';</script>";
		echo $_SESSION['date_versement'];
	 header("Location: laListeClient.php?mensaje=ok&respuesta=Données actualiser correctement");
}else{
	echo "<br>" . mysqli_error($connection);
	// echo "no se pudo actualizar los datos";
	// echo "<script> alert('no se pudo actualizar los datos');
	// location.href = 'procesar_modifierRecu.php';</script>";

	header("Location: laListeClient.php?mensaje=ok&respuesta=ERREUR : Rien n'est actualisée");
}

?>