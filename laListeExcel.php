<?php 
require_once('conexion.php');
//he creado un comentario
////he creado un comentario

$consultarA = "select * from proyectosis";
$queryA = mysqli_query($connection, $consultarA);
$arrayA = mysqli_fetch_array($queryA);

header("Content-Type: application/xls");
	header("Content-Disposition: attachment; filename=listeRecus.xls");
	header("Pragma: no-cache");
	header("Expires: 0");

	
	echo '<table border="1">';
	echo '<tr><th>'.utf8_decode("Date").'</th><th>'.utf8_decode("Reçu").'</th><th>Le Type</th><th>'.utf8_decode("Attestation").'</th><th>Police</th><th>'.utf8_decode("Matricule").'</th><th>'.utf8_decode("Produit").'</th><th>'.utf8_decode("Assuré").'</th><th>Date du</th><th>Date au</th><th>Prime Totale</th><th>'.utf8_decode("Espèce").'</th><th>'.utf8_decode("Chéque").'</th><th>'.utf8_decode("Virement").'</th><th>Reste</th><th>'.utf8_decode("Date versement").'</th><th>'.utf8_decode("Crée le").'</th></tr>';

	foreach ($queryA as $fila) {
		echo '<tr><td>' . utf8_decode($fila['fecha_hoy']) . '</td>
		<td>' . utf8_decode($fila['recu']) . '</td>
			  <td>' . utf8_decode($fila['letype']) . '</td><td>
			  '. utf8_decode($fila['attestation']) . '</td><td>
			  '. utf8_decode($fila['police']) . '</td><td>
			  '. utf8_decode($fila['matricule']) . '</td><td>
			  '. utf8_decode($fila['produit']) . '</td><td>
			  ' . utf8_decode($fila['assure']) . '</td><td>
			  ' . utf8_decode($fila['du']) . '</td><td>
			  ' . utf8_decode($fila['au']) . '</td><td>
			  ' . utf8_decode($fila['totale']) . '</td><td>
			  ' . utf8_decode($fila['espece']) . '</td><td>
			  ' . utf8_decode($fila['cheque']) . '</td><td>
			   ' . utf8_decode($fila['virement']) . '</td><td>
			    ' . utf8_decode($fila['reste']) . '</td><td>
			    '. utf8_decode($fila['date_versement']) . '</td><td>
			    
			  ' . utf8_decode($fila['cree_le']) . '</td></tr>';
	}
	echo '</table>';



 ?>