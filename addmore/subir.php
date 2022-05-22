<?php 
session_start();
try {
	

	$conn = new PDO('mysql:host=localhost;dbname=crud_ajax_php','root','');
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$msg = '';
	if (isset($_POST['upload'])) {
		$imagen = $_FILES['imagen']['name'];
		$path = 'imagenes/'.$imagen;

		$sql ="insert into caroussel_slider (`ruta-imagen`) values ('$path')";
		$stmt = $conn->prepare($sql);
		$stmt->execute();

		if ($stmt) {
			move_uploaded_file($_FILES['imagen']['tmp_name'], $path);
			$msg = 'Imagen subida correctamente';
			echo $msg;
			$_SESSION['$msg'] = $msg;
				header('location: carousel.php');
		}else{
			$msg = 'Error al subir la imagen';
			echo $msg;
			$_SESSION['$msg'] = $msg;
				header('location: carousel.php');
		}


	}


} catch (Exception $e) {
	  echo 'Falló la conexión: ' . $e->getMessage();
	
}


?>