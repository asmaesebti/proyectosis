<?php 
session_start();

require_once('conexion.php');


$id = $_GET['id'];



$eliminar = "DELETE FROM usuarios WHERE id = '$id'";

$query = mysqli_query($connection, $eliminar);

if ($query) {
			 // echo "<script> alert('ERES EL ADMINISTRADOR : Se ha eliminado el registro correctamente');
			 // location.href = 'consultar.php';</script>";

	header("Location: laListeClient.php?mensaje=ok&respuesta=Données effacée correctement");
}else{

	// echo "no se pudo eliminar el registro de la base de datos";
	// echo "<script> alert('no se pudo actualizar los datos');
	// location.href = 'consultar.php';</script>";

	header("Location: laListeClient.php?mensaje=ok&respuesta=Rien n'est effacée dans la base de données");
}



?>