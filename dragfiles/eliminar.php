<?php 
session_start();

require_once('conexion.php');

if (!isset($_GET['id'])) {
	//header("location: EjercicioClaseBootstrap.php");
	$id = "";
}else{
	$id = $_GET['id'] ;
	//echo "<h1>Bienvenido : $email </h1>";
	
// echo "<h2></h2>";
}


	
$eliminar = "DELETE FROM tabla_imagenes WHERE id = '$id'";

$query = mysqli_query($connection, $eliminar);

if ($query) {
			echo "<script> alert('Se ha eliminado el registro correctamente');
			location.href = 'drag.php';</script>";
		}else{

			echo "no se pudo eliminar el registro de la base de datos";
			echo "<script> alert('no se pudo actualizar los datos');
			location.href = 'drag.php';</script>";
		}

	

 ?>