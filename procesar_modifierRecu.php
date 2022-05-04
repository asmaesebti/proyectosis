<?php 

require_once('conexion.php');

$recu = $_POST['recu'];
$leType = $_POST['leType'];
$police = $_POST['police'];
$assure = $_POST['assure'];
$du = $_POST['du'];
$au = $_POST['au'];
$totale = $_POST['totale'];
$espece = $_POST['espece'];
$cheque = $_POST['cheque'];
$autre = $_POST['autre'];
$reste = $_POST['reste'];


//Actualizar los datos 

$actualizar = "UPDATE proyectosis SET  letype = '$leType', police = '$police', assure = '$assure',du = '$du' , au = '$au',totale = '$totale' ,  espece = '$espece' , cheque = '$cheque' , autre = '$autre' , reste = '$reste'  WHERE recu = '$recu'";


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