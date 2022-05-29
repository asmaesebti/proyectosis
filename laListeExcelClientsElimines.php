<?php 
require_once('conexion.php');

$consultarA = "select * from usuarios_eliminados";
$queryA = mysqli_query($connection, $consultarA);
$arrayA = mysqli_fetch_array($queryA);

header("Content-Type: application/xls");
	header("Content-Disposition: attachment; filename=listeClientsElimines.xls");
	header("Pragma: no-cache");
	header("Expires: 0");

	
	echo '<table border="1">';
	echo '<tr><th>'.utf8_decode("ID").'</th><th>'.utf8_decode("NOM").'</th><th>'.utf8_decode("PRENOM").'</th><th>'.utf8_decode("EMAIL").'</th><th>'.utf8_decode("TELEPHONE").'</th></tr>';

	foreach ($queryA as $fila) {
		echo '<tr><td>' . utf8_decode($fila['id']) . '</td>
		<td>' . utf8_decode($fila['nombre']) . '</td>
			  <td>' . utf8_decode($fila['apellidos']) . '</td><td>
			  '. utf8_decode($fila['email']) . '</td><td>
			  '. utf8_decode($fila['telefono']) . '</td></tr>';
	}
	echo '</table>';



 ?>