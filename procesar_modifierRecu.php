<?php 

require_once('conexion.php');

$fecha_hoy = $_POST['fecha_hoy'];
$recu = $_POST['recu'];
$leType = $_POST['leType'];
$attestation = $_POST['attestation'];
$police = $_POST['police'];
$matricule = $_POST['matricule'];
$produit = $_POST['produit'];
$assure = $_POST['assure'];
$du = $_POST['du'];
$au = $_POST['au'];
$totale = $_POST['totale'];
$espece = $_POST['espece'];
$cheque = $_POST['cheque'];
$autre = $_POST['autre'];
$reste = $_POST['reste'];
$date_versement = $_POST['date_versement'];
$mode_paiment = $_POST['mode_paiment'];


//Actualizar los datos 

$actualizar = "UPDATE proyectosis SET fecha_hoy = '$fecha_hoy', letype = '$leType', attestation = '$attestation', police = '$police', matricule = '$matricule', produit = '$produit',  assure = '$assure',du = '$du' , au = '$au',totale = '$totale' ,  espece = '$espece' , cheque = '$cheque' , autre = '$autre' , reste = '$reste', date_versement = '$date_versement', mode_paiment = '$mode_paiment'  WHERE recu = '$recu'";


$query = mysqli_query($connection, $actualizar);

if ($query) {
	// echo "<script> alert('Se han actualizado los cambios correctamente');
	// location.href = 'laListe.php';</script>";

	header("Location: laListe.php?mensaje=ok&respuesta=Données actualiser correctement");
}else{

	// echo "no se pudo actualizar los datos";
	// echo "<script> alert('no se pudo actualizar los datos');
	// location.href = 'procesar_modifierRecu.php';</script>";

	header("Location: index.php?mensaje=ok&respuesta=ERREUR : Rien n'est actualisée");
}

?>