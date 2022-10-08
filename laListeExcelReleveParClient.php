<?php 
session_start();
require_once('conexion.php');
//he creado un comentario
////he creado un comentario
///asmae

$client = $_SESSION['client'] ;
$prenom = $_SESSION['prenom'] ;
$address = $_SESSION['address'] ;

$consultarA = "SELECT * FROM proyectosis WHERE assure like '$client' and prenom like '$prenom' ";
$queryA = mysqli_query($connection, $consultarA);
$arrayA = mysqli_fetch_array($queryA);
$total = 0;
$totales = 0;
$totalch = 0;
$totalvi = 0;
$totalre = 0;


header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=listeExcelReleveParClient.xls");
header("Pragma: no-cache");
header("Expires: 0");

echo '<table border="0">';
echo '<tr></tr>';
echo '<tr></tr>';
echo '<tr></tr>';
echo '<tr></tr>';
echo '<tr></tr>';
echo '<tr></tr>';
echo '<tr></tr>';
echo '<tr></tr>';
echo '<tr></tr>';
echo '<tr></tr>';
echo '<tr></tr>';
echo '<tr></tr>';
echo '<tr></tr>';


echo '<tr><th></th><th></th><th style="text-align: left;">'.utf8_decode('Rabat, le : '.date("d/m/Y")).'</th></tr>';
echo '<tr><th></th></tr>';
echo '<tr><th></th><th></th><th style="text-align: left;">'.utf8_decode($client) . " " . utf8_decode($prenom).'</th></tr>';
echo '<tr><th></th></tr>';
echo '<tr><th></th><th></th><th style="text-align: left;">'.utf8_decode($address).'</th></tr>';
echo '<tr><th></th></tr>';
echo '<tr><th></th><th></th><th style="font-size: 135%;">'.utf8_decode("RELEVÉ").'</th></tr>';
echo '<tr><th></th></tr>';
echo '</table>';

echo '<table border="0" style="border-collapse: collapse;">';
echo '<tr><th style="border: 1pt solid black;">'.utf8_decode("N° Police").'</th><th style="border: 1pt solid black;">'.utf8_decode("Période").'</th><th style="border: 1pt solid black;">'.utf8_decode("Désignation").'</th><th style="border: 1pt solid black;">'.utf8_decode("Prime Nette").'</th><th style="border: 1pt solid black;">'.utf8_decode("Taxes").'</th><th style="border: 1pt solid black;">'.utf8_decode("T.P").'</th><th style="border: 1pt solid black;">'.utf8_decode("ACCESOIRES").'</th><th style="border: 1pt solid black;">'.utf8_decode("Total TTC").'</th></tr>';

foreach ($queryA as $row) {
	echo '<tr><td style="border: 1pt solid black;">' . utf8_decode($row['police']) . '</td>
	<td style="border: 1pt solid black;">' . utf8_decode($row["du"] . " AU " . $row["au"]) . '</td>
	<td style="border: 1pt solid black;">' . utf8_decode($row["designation"]) . '</td><td style="border: 1pt solid black;">
	' . str_replace('.',',',utf8_decode($row["prime_net"])) . '</td><td style="border: 1pt solid black;">
	' . str_replace('.',',',utf8_decode($row["taxes"])) . '</td><td style="border: 1pt solid black;">
	' . str_replace('.',',',utf8_decode($row["tp"])) . '</td><td style="border: 1pt solid black;">
	' . str_replace('.',',',utf8_decode($row["accesoires"])) . '</td><td style="border: 1pt solid black;">
	' . str_replace('.',',',utf8_decode($row["totale"])) . '</td></tr>';
	$total = $total + $row['prime_net'];
	$totales = $totales + $row['taxes'];
	$totalch = $totalch + $row['tp'];
	$totalvi = $totalvi + $row['accesoires'];
	$totalre = $totalre + $row['totale'];
}
echo '<tr><td></td><td></td><td style="border-left: 1pt solid black; border-top: 1pt solid black; border-bottom: 1pt solid black;" colspan="5"><strong>Total Primes:</strong></td><td style="border-right: 1pt solid black; border-top: 1pt solid black; border-bottom: 1pt solid black;">'. str_replace('.',',',utf8_decode($total)) . '</td></tr>';
echo '<tr><td></td><td></td><td style="border-left: 1pt solid black; border-top: 1pt solid black; border-bottom: 1pt solid black;" colspan="5"><strong>Total Taxes:</strong></td><td style="border-right: 1pt solid black; border-top: 1pt solid black; border-bottom: 1pt solid black;">'. str_replace('.',',',utf8_decode($totales)) . '</td></tr>';
//echo '<tr><td></td><td></td><td>total:</td><td></td><td></td><td></td><td></td><td>'. str_replace('.',',',utf8_decode($totalch)) . '</td></tr>';
echo '<tr><td></td><td></td><td style="border-left: 1pt solid black; border-top: 1pt solid black; border-bottom: 1pt solid black;" colspan="5"><strong>Total Timbres & Accessoires:</strong></td><td style="border-right: 1pt solid black; border-top: 1pt solid black; border-bottom: 1pt solid black;">'. str_replace('.',',',utf8_decode($totalvi)) . '</td></tr>';
echo '<tr><td></td><td></td><td style="border-left: 1pt solid black; border-top: 1pt solid black; border-bottom: 1pt solid black;" colspan="5"><strong>Total TTC:</strong></td><td style="border-right: 1pt solid black; border-top: 1pt solid black; border-bottom: 1pt solid black;">'. str_replace('.',',',utf8_decode($totalre)) . '</td></tr>';
echo '</table>';
function formatDollars($dollars)
{
	$formatted = "$" . number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "", $dollars)), 2);
	return $dollars < 0 ? "-{$formatted}" : "{$formatted}";
}

?>