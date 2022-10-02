<?php 
session_start();
require_once('conexion.php');

mysqli_query($connection,"SET CHARACTER SET 'utf8'");
mysqli_query($connection,"SET SESSION collation_connection ='utf8_unicode_ci'");

$fecha_hoy = $_POST['fecha_hoy'];
$recu = $_POST['recu'];
$leType = $_POST['leType'];
$attestation = $_POST['attestation'];
$police = $_POST['police'];
$designation = $_POST['designation'];
$matricule = $_POST['matricule'];
$produit = $_POST['produit'];
$assure = $_POST['assure'];
$prenom = $_POST['prenom'];
$address_client = $_POST['address_client'];
$du = $_POST['du'];
$au = $_POST['au'];
$prime_net = $_POST['prime_net'];

$taxes = $_POST['taxes'];
$tp = $_POST['tp'];
$accesoires = $_POST['accesoires'];
$totale = $_POST['totale'];

$espece = $_POST['espece'];
$cheque = $_POST['cheque'];
$virement = $_POST['virement'];
$reste = $_POST['reste'];
$date_versement = $_POST['date_versement'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

echo $_POST['leType'] . "<br>";
echo $_POST['attestation'] . "<br>";

$leType = html_entity_decode($leType, ENT_QUOTES | ENT_HTML401, "UTF-8");

if (!isset($_POST['date_versement'])) {
	$date_versement = "1970/01/01";

}else{
	$date_versement = $_POST['date_versement'];
	
	$_SESSION['date_versement'] = $date_versement;
	
}

if ($date_versement != null) {
	echo "<br>";
	echo "La date_versement choisie est correcte";
	
}else{

	$date_versement = "1970/01/01";
	$_SESSION['date_versement'] = $date_versement;
}


// $mode_paiment = $_POST['mode_paiment'];


//Actualizar los datos 

$actualizar = "UPDATE proyectosis SET fecha_hoy = '$fecha_hoy', letype = '$leType', attestation = '$attestation', police = '$police', designation = '$designation', matricule = '$matricule', produit = '$produit',  assure = '$assure', prenom = '$prenom', du = '$du' , au = '$au',prime_net = '$prime_net', taxes = '$taxes', tp = '$tp', accesoires = '$accesoires', totale = '$totale' ,  espece = '$espece' , cheque = '$cheque' , virement = '$virement' , reste = '$reste', date_versement = '$date_versement' ,telefono = '$telefono',email = '$email', address_client = '$address_client'   WHERE recu = '$recu'";


$query = mysqli_query($connection, $actualizar);

if ($query) {
	// echo "<script> alert('Se han actualizado los cambios correctamente');
	// location.href = 'laListe.php';</script>";
		echo $_SESSION['date_versement'];
	 header("Location: laListe.php?mensaje=ok&respuesta=Données actualiser correctement");
}else{
	echo "<br>" . mysqli_error($connection);
	// echo "no se pudo actualizar los datos";
	// echo "<script> alert('no se pudo actualizar los datos');
	// location.href = 'procesar_modifierRecu.php';</script>";

	header("Location: index.php?mensaje=ok&respuesta=ERREUR : Rien n'est actualisée");
}

?>