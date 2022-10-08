<?php
header("Content-Type: application/json");
session_start();
require_once('conexion.php');
if(isset($_POST['limit'])){
	$limit = preg_replace('#[^0-9]#', '', $_POST['limit']);
	require_once("conexion.php");
	$i = 0;
	$jsonData = '{';
	$sqlString = "select * from proyectosis ORDER BY RAND() LIMIT $limit";
	$query = mysqli_query($connection,$sqlString) or die (mysqli_error()); 
	while ($row = mysqli_fetch_array($query)) {
		$i++;
    	$recu = $row["recu"]; 
    	$assure = $row["assure"];
		$police  = $row["police"];
		$fecha_hoy  = $row["fecha_hoy"];
	    $fecha_hoy = strftime("%B %d, %Y", strtotime($fecha_hoy));
		$jsonData .= '"article'.$i.'":{ "recu":"'.$recu.'","assure":"'.$assure.'", "police":"'.$police.'", "fecha_hoy":"'.$fecha_hoy.'" },';
	}
	$now = getdate();
    $timestamp = $now[0];
	$jsonData .= '"arbitrary":{"itemcount":'.$i.', "returntime":"'.$timestamp.'"}';
	$jsonData .= '}';
    echo $jsonData;
}
?>