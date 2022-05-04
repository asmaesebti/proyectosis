<?php 


session_start();
require_once('conexion.php');
require_once('valorSeguro.php');
include('funcionesValidacion.php');

$errorLetype = $errorPolice = $errorAssure = $errorDu = $errorAu = $errorTotale = $errorEspece = $errorCheque = $errorAutre = $errorReste = "";
$query = "";
$contador = 0;

if (!isset($_POST['leType'])) {
	$leType = null;

}else{
	$leType = $_POST['leType'];
	$leType = valorSeguro($leType);
	$_SESSION['leType'] = $leType;
	$contador++;
}

if ($leType != null) {
	// $errorLetype = "La option choisie est correcte";
	// $_SESSION['errorLetype'] = $errorLetype;
	echo "<br>";
	echo "La option choisie est correcte";
}else{
	$errorLetype = "* Tu dois seleccioner une opcion";
	$_SESSION['errorLetype'] = $errorLetype;
	echo "<br>";
	echo "Tu dois seleccioner une opcion";
}

if (!isset($_POST['police'])) {
	$police = null;

}else{
	$police = $_POST['police'];
	$police = valorSeguro($police);
	$_SESSION['police'] = $police;
	$contador++;
}

if ($police != null) {
	echo "<br>";
	echo "La police choisie est correcte";
	
}else{
	$errorPolice = "Tu dois introduire une police";
	$_SESSION['errorPolice'] = $errorPolice;
	echo "<br>";
	echo "Tu dois introduire une police";
}

if (!isset($_POST['assure'])) {
	$assure = null;

}else{
	$assure = $_POST['assure'];
	$assure = valorSeguro($assure);
	$_SESSION['assure'] = $assure;
	$contador++;
}

if ($assure != null) {
	echo "<br>";
	echo "L'assuré choisie est correcte";
	
}else{
	$errorAssure = "Tu dois introduire un assuré";
	$_SESSION['errorAssure'] = $errorAssure;
	echo "<br>";
	echo "Tu dois introduire un assuré";
}

if (!isset($_POST['du'])) {
	$du = null;

}else{
	$du = $_POST['du'];
	$du = valorSeguro($du);
	$_SESSION['du'] = $du;
	$contador++;
}

if ($du != null) {
	echo "<br>";
	echo "La date du choisie est correcte";
	
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
	$contador++;
}

if ($au != null) {
	echo "<br>";
	echo "La date au choisie est correcte";
	
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
	$contador++;
}

if ($totale != 0) {
	echo "<br>";
	echo "Le montant total choisie est correct";
	
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
}


if (!isset($_POST['cheque'])) {
	$cheque = "";

}else{
	$cheque = valorSeguro($_POST['cheque']);
}

if (!isset($_POST['autre'])) {
	$autre = "";

}else{
	$autre = valorSeguro($_POST['autre']);
}
if (!isset($_POST['reste'])) {
	$reste = "";

}else{
	$reste = valorSeguro($_POST['reste']);
	$reste = $totale - $espece - $cheque;
	$_SESSION['reste'] = $reste;
}

echo "<br>";
echo $contador;

if ($contador == 6) {
	
	$insertar = "INSERT INTO `proyectosis` (`letype`, `police`, `assure`, `du`, `au`, `totale`, `espece` ,  `cheque` , `autre`, `reste` , `cree_le`) VALUES ('$leType','$police','$assure','$du','$au', '$totale', '$espece', '$cheque', '$autre' , '$reste', CURRENT_TIMESTAMP)";


	$query = mysqli_query($connection, $insertar);
} else {
	
}

if ($query) {
	echo "<br>Données enregistrer correctement";
	unset($_SESSION['leType']);
	unset($_SESSION['police']);
	unset($_SESSION['assure']);
	unset($_SESSION['du']);
	unset($_SESSION['au']);
	unset($_SESSION['totale']);

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