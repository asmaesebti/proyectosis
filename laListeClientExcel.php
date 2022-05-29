<?php 
require_once('conexion.php');
//he creado un comentario
////he creado un comentario
///asmae

$consultarA = "select * from usuarios";
$queryA = mysqli_query($connection, $consultarA);
$arrayA = mysqli_fetch_array($queryA);

header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=listeClients.xls");
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

function formatDollars($dollars)
{
	$formatted = "$" . number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "", $dollars)), 2);
	return $dollars < 0 ? "-{$formatted}" : "{$formatted}";
}

?>