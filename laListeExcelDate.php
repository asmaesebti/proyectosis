<?php 
session_start();
require_once('conexion.php');
//echo $_SESSION["date_avant"];
//he creado un comentario
////he creado un comentario
///asmae
$date_avant = $_SESSION["date_avant"];
$date_apres = $_SESSION["date_apres"];

$consultarA = "SELECT * FROM `proyectosis` WHERE `fecha_hoy` BETWEEN '$date_avant' AND '$date_apres'";
$queryA = mysqli_query($connection, $consultarA);
$arrayA = mysqli_fetch_array($queryA);
$total = 0;
$totales = 0;
$totalch = 0;
$totalvi = 0;
$totalre = 0;


header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=listeRecusEntreDates.xls");
header("Pragma: no-cache");
header("Expires: 0");

echo '<strong>' . utf8_decode('La liste des reçus entre les dates: ') . $date_avant . ' et ' . $date_apres .'</strong>';
echo '<table border="1">';
echo '<tr><th>'.utf8_decode("Date").'</th><th>'.utf8_decode("Reçu").'</th><th>Le Type</th><th>'.utf8_decode("Attestation").'</th><th>Police</th><th>'.utf8_decode("Matricule").'</th><th>'.utf8_decode("Produit").'</th><th>'.utf8_decode("Nom Assuré").'</th><th>'.utf8_decode("Prenom Assuré").'</th><th>Date du</th><th>Date au</th><th>Prime Totale</th><th>'.utf8_decode("Espèce").'</th><th>'.utf8_decode("Chéque").'</th><th>'.utf8_decode("Virement").'</th><th>Reste</th><th>'.utf8_decode("Date versement").'</th><th>'.utf8_decode("Telephone").'</th><th>'.utf8_decode("Email").'</th><th>'.utf8_decode("Crée le").'</th></tr>';

foreach ($queryA as $fila) {
	echo '<tr><td>' . utf8_decode($fila['fecha_hoy']) . '</td>
	<td>' . utf8_decode($fila['recu']) . '</td>
	<td>' . utf8_decode($fila['letype']) . '</td><td>
	'. utf8_decode($fila['attestation']) . '</td><td>
	'. utf8_decode($fila['police']) . '</td><td>
	'. utf8_decode($fila['matricule']) . '</td><td>
	'. utf8_decode($fila['produit']) . '</td><td>
	' . utf8_decode($fila['assure']) . '</td><td>
	' . utf8_decode($fila['prenom']) . '</td><td>
	' . utf8_decode($fila['du']) . '</td><td>
	' . utf8_decode($fila['au']) . '</td><td >
	' . str_replace('.',',',utf8_decode($fila['totale'])) . '</td><td>
	' . str_replace('.',',',utf8_decode($fila['espece'])) . '</td><td>
	' . str_replace('.',',',utf8_decode($fila['cheque'])) . '</td><td>
	' . str_replace('.',',',utf8_decode($fila['virement'])) . '</td><td>
	' . str_replace('.',',',utf8_decode($fila['reste'])) . '</td><td>
	'. utf8_decode($fila['date_versement']) . '</td><td>
	' . utf8_decode($fila['telefono']) . '</td><td>
	' . utf8_decode($fila['email']) . '</td><td>
	' . utf8_decode($fila['cree_le']) . '</td></tr>';
	$total = $total + $fila['totale'];
	$totales = $totales + $fila['espece'];
	$totalch = $totalch + $fila['cheque'];
	$totalvi = $totalvi + $fila['virement'];
	$totalre = $totalre + $fila['reste'];
}
echo '<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>total:</td><td>'. str_replace('.',',',utf8_decode($total)) . '</td><td>'. str_replace('.',',',utf8_decode($totales)) . '</td><td>'. str_replace('.',',',utf8_decode($totalch)) . '</td><td>'. str_replace('.',',',utf8_decode($totalvi)) . '</td><td>'. str_replace('.',',',utf8_decode($totalre)) . '</td></tr>';
echo '</table>';

function formatDollars($dollars)
{
	$formatted = "$" . number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "", $dollars)), 2);
	return $dollars < 0 ? "-{$formatted}" : "{$formatted}";
}

unset($_SESSION['date_avant']);
unset($_SESSION['date_apres']);

?>