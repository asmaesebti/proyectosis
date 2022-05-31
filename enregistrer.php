<?php 


session_start();
require_once('conexion.php');
require_once('valorSeguro.php');
include('funcionesValidacion.php');
include('phpqrcode2/phpqrcode/qrlib.php'); 

$errorLetype = $errorPolice = $errorAssure = $errorDu = $errorAu = $errorTotale = $errorEspece = $errorCheque = $errorAutre = $errorReste = $errorFecha_hoy = 
$errorAttestation = $errorMatricule = $errorProduit = $errorDate_versement = $errorModePaiment = $errorTelefono = $error_email = $error_prenom = "";
$query = "";
$contador = 0;

if (!isset($_POST['fecha_hoy'])) {
	$fecha_hoy = null;

}else{
	$fecha_hoy = $_POST['fecha_hoy'];
	$fecha_hoy = valorSeguro($fecha_hoy);
	$_SESSION['fecha_hoy'] = $fecha_hoy;
	
}

if ($fecha_hoy != null) {
	echo "<br>";
	echo "La date  est correcte";
	
}else{
	$errorFecha_hoy =  "Tu dois choisir une date fecha_hoy";
	$_SESSION['errorFecha_hoy'] = $errorFecha_hoy;
	echo "<br>";
	echo "Tu dois choisir une date fecha_hoy";
}


if (!isset($_POST['leType'])) {
	$leType = null;

}else{
	$leType = $_POST['leType'];
	$leType = valorSeguro($leType);
	$_SESSION['leType'] = $leType;
	
}

if ($leType != null && $leType != "Seleccioner une affaire") {
	// $errorLetype = "La option choisie est correcte";
	// $_SESSION['errorLetype'] = $errorLetype;
	echo "<br>";
	echo "La option choisie est correcte";
	$contador++;
}else{
	$errorLetype = "* Tu dois seleccioner une opcion";
	$_SESSION['errorLetype'] = $errorLetype;
	echo "<br>";
	echo "Tu dois seleccioner une opcion";
	
}
if (!isset($_POST['attestation'])) {
	$attestation = null;

}else{
	$attestation = $_POST['attestation'];
	$attestation = valorSeguro($attestation);
	$_SESSION['attestation'] = $attestation;
	
}

// if ($attestation != null) {
// 	echo "<br>";
// 	echo "La attestation choisie est correcte";
// 	$contador++;
// }else{
// 	$errorAttestation = "Tu dois introduire une attestation";
// 	$_SESSION['errorAttestation'] = $errorAttestation;
// 	echo "<br>";
// 	echo "Tu dois introduire une attestation";

// }

if (!isset($_POST['police'])) {
	$police = null;

}else{
	$police = $_POST['police'];
	$police = valorSeguro($police);
	$_SESSION['police'] = $police;
	
}

if ($police != null) {
	echo "<br>";
	echo "La police choisie est correcte";
	$contador++;
}else{
	$errorPolice = "Tu dois introduire une police";
	$_SESSION['errorPolice'] = $errorPolice;
	echo "<br>";
	echo "Tu dois introduire une police";

}

if (!isset($_POST['matricule'])) {
	$matricule = null;

}else{
	$matricule = $_POST['matricule'];
	$matricule = valorSeguro($matricule);
	$_SESSION['matricule'] = $matricule;
	
}

// if ($matricule != null) {
// 	echo "<br>";
// 	echo "La matricule choisie est correcte";
// 	$contador++;
// }else{
// 	$errorMatricule = "Tu dois introduire une matricule";
// 	$_SESSION['errorMatricule'] = $errorMatricule;
// 	echo "<br>";
// 	echo "Tu dois introduire une matricule";
// }

if (!isset($_POST['produit'])) {
	$produit = null;

}else{
	$produit = $_POST['produit'];
	$produit = valorSeguro($produit);
	$_SESSION['produit'] = $produit;
	
}

if ($produit != null) {
	echo "<br>";
	echo "Le produit choisie est correcte";
	$contador++;
}else{
	$errorProduit = "Tu dois introduir un produit";
	$_SESSION['errorProduit'] = $errorProduit;
	echo "<br>";
	echo "Tu dois introduir un produit";
}

if (!isset($_POST['email'])) {
	$email = null;

}else{
	$email = $_POST['email'];
	$email = valorSeguro($email);
	$_SESSION['email'] = $email;
	
}


if (!isset($_POST['assure'])) {
	$assure = null;

}else{
	$assure = $_POST['assure'];
	$assure = valorSeguro($assure);
	$_SESSION['assure'] = $assure;
	
}

if ($assure != null) {
	echo "<br>";
	echo "L'assuré choisie est correcte";
	$contador++;
}else{
	$errorAssure = "Tu dois introduire un assuré";
	$_SESSION['errorAssure'] = $errorAssure;
	echo "<br>";
	echo "Tu dois introduire un assuré";
}

if (!isset($_POST['prenom'])) {
	$prenom = null;

}else{
	$prenom = $_POST['prenom'];
	$prenom = valorSeguro($prenom);
	$_SESSION['prenom'] = $prenom;
	
}

if ($prenom != null) {
	echo "<br>";
	echo "Le prenom de L'assuré choisie est correcte";
	$contador++;
}else{
	$error_prenom = "Tu dois introduire un prenom assuré";
	$_SESSION['error_prenom'] = $error_prenom;
	echo "<br>";
	echo "Tu dois introduire un prenom de l'assuré";
}

if (!isset($_POST['telefono'])) {
	$telefono = null;

}else{
	$telefono = $_POST['telefono'];
	$telefono = valorSeguro($telefono);
	$_SESSION['telefono'] = $telefono;
	
}

if (!isset($_POST['du'])) {
	$du = null;

}else{
	$du = $_POST['du'];
	$du = valorSeguro($du);
	$_SESSION['du'] = $du;
	
}

if ($du != null) {
	echo "<br>";
	echo "La date du choisie est correcte";
	$contador++;
}else{
	$errorDu =  "Tu dois choisir une date du";
	$_SESSION['errorDu'] = $errorDu;
	echo "<br>";
	echo "Tu dois choisir une date du";
}


if (!isset($_POST['au'])) {
	$au = "";

}else{
	$au = $_POST['au'];
	$au = valorSeguro($au);
	$_SESSION['au'] = $au;
	
}

if ($au != null) {
	echo "<br>";
	echo "La date au choisie est correcte";
	$contador++;
}else{
	$errorAu =  "Tu dois choisir une date au";
	$_SESSION['errorAu'] = $errorAu;
	echo "<br>";
	echo "Tu dois choisir une date au";
}


if (!isset($_POST['totale'])) {
	$totale = null;

}else{
	$totale = $_POST['totale'];
	$totale = valorSeguro($totale);
	$_SESSION['totale'] = $totale;
	
}

if ($totale != 0) {
	echo "<br>";
	echo "Le montant total choisie est correct";
	$contador++;
}else{
	$errorTotale =  "Tu dois introduire un montant total";
	$_SESSION['errorTotale'] = $errorTotale;
	echo "<br>";
	echo "Tu dois introduire un montant";
}

if (!isset($_POST['espece'])) {
	$espece = null;

}else{
	$espece = $_POST['espece'];
	$espece = valorSeguro($espece);
	$_SESSION['espece'] = $espece;
}


if (!isset($_POST['cheque'])) {
	$cheque = "";

}else{
	$cheque = valorSeguro($_POST['cheque']);
	$_SESSION['cheque'] = $cheque;
}

if (!isset($_POST['virement'])) {
	$virement = "";

}else{
	$virement = valorSeguro($_POST['virement']);
	$_SESSION['virement'] = $virement;
}

if (!isset($_POST['reste'])) {
	$reste = "";

}else{
	$reste = valorSeguro($_POST['reste']);
	$reste = $totale - $espece - $cheque;
	$_SESSION['reste'] = $reste;
}

if (!isset($_POST['date_versement'])) {
	$date_versement = "00/00/0000";

}else{
	$date_versement = $_POST['date_versement'];
	$date_versement = valorSeguro($date_versement);
	$_SESSION['date_versement'] = $date_versement;
	
}

// if ($date_versement != null) {
// 	echo "<br>";
// 	echo "La date_versement choisie est correcte";

// }else{
// 	$errorDate_versement =  "Tu dois choisir une date versement";
// 	$_SESSION['errorDate_versement'] = $errorDate_versement;
// 	echo "<br>";
// 	echo "Tu dois choisir une date versement";
// }

// if (!isset($_POST['mode_paiment'])) {
// 	$mode_paiment = null;

// }else{
// 	$mode_paiment = $_POST['mode_paiment'];
// 	$mode_paiment = valorSeguro($mode_paiment);
// 	$_SESSION['mode_paiment'] = $mode_paiment;

// }

// if ($mode_paiment != null) {
// 	echo "<br>";
// 	echo "Le mode paiment choisie est correcte";

// }else{
// 	$errorModePaiment = "Tu dois introduire un mode paiment";
// 	$_SESSION['errorModePaiment'] = $errorModePaiment;
// 	echo "<br>";
// 	echo "Tu dois introduire un mode paiment";
// }

$codigoQr = $assure . "_" . $prenom . "_" . $leType . "_" . $attestation . "_" . $police . "_" . $matricule . "_" . $produit . "_"
  . $du . "_" . $au . "_" .$totale . "_" . $espece . "_" . $cheque . "_" . $virement . "_" . $reste . "_" . $telefono . "_" . $email ;
$folder="images/";
// $file_name="qr1".date('m-d-Y-His A e').".png";
$file_name=$codigoQr.".png";
$file_name=$folder.$file_name;
QRcode::png($codigoQr,$file_name);
QRcode::png($codigoQr);


echo "<br>";
echo $contador;

if ($contador == 8) {
	
	$insertar = "INSERT INTO `proyectosis` (`fecha_hoy`, `letype`, `attestation`, `police`, `matricule`, `produit`,`assure`, `prenom`, `du`, `au`, `totale`, `espece` ,  `cheque` , `virement`, `reste` ,  `cree_le`, `telefono`, `email`) VALUES ('$fecha_hoy','$leType','$attestation','$police', '$matricule', '$produit','$assure', '$prenom' ,'$du','$au', '$totale', '$espece', '$cheque', '$virement' , '$reste', CURRENT_TIMESTAMP, '$telefono', '$email')";

	// $insertarTelefono = "INSERT INTO `usuarios`(`telefono`) VALUES ('$telefono')";

	// $queryTellefono = mysqli_query($connection, $insertarTelefono);


	 $query = mysqli_query($connection, $insertar);
} else {
	
}

if ($query) {
	echo "<br>Données enregistrer correctement";
	// unset($_SESSION['leType']);
	// unset($_SESSION['police']);
	// unset($_SESSION['assure']);
	// unset($_SESSION['du']);
	// unset($_SESSION['au']);
	// unset($_SESSION['totale']);

	// echo "<script> alert('Registro Guardado correctamente');
	// location.href = 'formularioRegistrarPersonalNoDocente.php';</script>";

	header("Location: index.php?mensaje=ok&respuesta=Données enregistrer correctement");

}else{

	echo "<br>Rien nést sauvegarder dans la base de données";
	echo "<br>" . mysqli_error($connection);
	// echo "<script> alert('No se pudo guardar los datos por que  el DNI introducido ya está registrado en la base de datos');
	// location.href = 'formularioRegistrarPersonalNoDocente.php';</script>";
	
	//header("Location: index.php");

	header("Location: index.php?mensaje=ok&respuesta=Rien nést sauvegarder dans la base de données");
}

?>