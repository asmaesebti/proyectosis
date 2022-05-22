<?php 


require_once("db.php");

$db = new BaseDatos();

if (isset($_POST['action']) && $_POST['action'] == "view") {

	$salida ='';
	$dato = $db->mostrarTodos();

	// echo "<pre>";
	// print_r($dato);
	// echo "</pre>";


	if ($db->numeroTotalDeFilas()) {
		$salida .= '<table class="table table-striped table-sm table-bordered">
		<thead>
		<tr class="text-center">
		<th>ID</th>
		<th>NOM</th>
		<th>PRENOM</th>
		<th>EMAIL</th>
		<th>TELEPHONE</th>
		<th>ACTION</th>
		</tr>
		</thead>
		<tbody>';

		foreach ($dato as $fila) {
			$salida .= '<tr class="text-center">';
			$salida .= '<td>'. $fila['id'] .'</td>
			<td>'.$fila['nombre'].'</td>
			<td>'. $fila['apellidos'] .'</td>
			<td>'.$fila['email'].'</td>
			<td>'.$fila['telefono'].'</td>';
			$salida .= '<td> <a href="" title="Mostrar Detailles" class="text-success infoBtn" id="'.$fila['id'].'"><i class="fas fa-info-circle fa-lg"></i></a>&nbsp;&nbsp;

			<a href="" title="Modificar" data-bs-toggle="modal" data-bs-target="#editModal" class="text-primary editBtn" id="'.$fila['id'].'"><i class="fas fa-edit fa-lg"></i></a>&nbsp;&nbsp; 

			<a href="" title="Eliminar" class="text-danger delBtn" id="'.$fila['id'].'"><i class="fas fa-trash-alt fa-lg"></i></a>&nbsp;&nbsp;
			<a href="phpMail040322/enviarEmail.php?id='.$fila['id'].'&nombre='.$fila['nombre'].'&email='.$fila['email'].'&telefono='.$fila['telefono'].'" title="Email" class="text-warning " ><i class="fas fa-envelope fa-lg"></i></a>&nbsp;&nbsp;
			</td>
			</tr>';
		}

		$salida .= '</tbody></table>';
		echo $salida;
	}else{
		echo '<h3 class="text-center mt-5">:(No hay usuarios en la base de datos)</h3>';
	}

}


if (isset($_POST['action']) && $_POST['action'] == "insert") {
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];

	$db->insertar($nombre,$apellidos,$email,$telefono);

}

if (isset($_POST['edit_id'])) {
	$id = $_POST['edit_id'];

	$fila = $db->obtenerUsuarioPorId($id);
	echo json_encode($fila);
}

if (isset($_POST['action']) && $_POST['action'] == "update") {
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];

	$db->actualizar($id,$nombre,$apellidos,$email,$telefono);
}

if (isset($_POST['del_id'])) {
	$id = $_POST['del_id'];

	$db->eliminar($id);
}

if (isset($_POST['info_id'])) {
	$id = $_POST['info_id'];

	$fila = $db->obtenerUsuarioPorId($id);
	echo json_encode($fila);
}

if (isset($_GET['export']) && $_GET['export'] == "excel") {
	header("Content-Type: application/xls");
	header("Content-Disposition: attachment; filename=listes_clients.xls");
	header("Pragma: no-cache");
	header("Expires: 0");

	$dato = $db->mostrarTodos();
	echo '<table border="1">';
	echo '<tr><th>ID</th><th>Nom</th><th>Prenom</th><th>Email</th><th>Telephone</th></tr>';

	foreach ($dato as $fila) {
		echo '<tr><td>' . $fila['id'] . '</td>
			  <td>' . $fila['nombre'] . '</td><td>
			  '. $fila['apellidos'] . '</td><td>
			  ' . $fila['email'] . '</td><td>
			  ' . $fila['telefono'] . '</td></tr>';
	}
	echo '</table>';
}



?>