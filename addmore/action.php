<?php 
	
	// print_r($_POST);

	$conn = new PDO('mysql:host=localhost;dbname=proyectosis','root','');

	foreach ($_POST['nombre'] as $key => $value) {
		$sql = "insert into usuarios(nombre,apellidos,email,telefono) values (:nombre, :apellidos, :email, :telefono)";
		$stmt = $conn->prepare($sql);
		
		$stmt->execute([
			'nombre' => $value, 
			'apellidos' => $_POST['apellidos'][$key], 
			'email' => $_POST['email'][$key],
			'telefono' => $_POST['telefono'][$key]
			 ]);
	}

	echo 'Clients ajoutés correctemant';

 ?>