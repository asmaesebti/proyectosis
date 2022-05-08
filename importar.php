<?php 

require_once('PHPExcel/Classes/PHPExcel.php');
require_once('conexion1.php');

if (isset($_POST["import"]))
{

	$allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];

	if(in_array($_FILES["file"]["type"],$allowedFileType)){

		$targetPath = 'uploads/'.$_FILES['file']['name'];
		move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
	//	echo $targetPath;

		$archivos =$targetPath;

		$excel = PHPExcel_IOFactory::load($archivos);

		$excel -> setActiveSheetIndex(0);

		$numerofila = $excel -> setActiveSheetIndex(0) -> getHighestRow();

// echo $numerofila;
// 

		for ($i=2; $i <= $numerofila ; $i++) { 
	//$id = $excel -> getActiveSheet() -> getCell('B' . $i)->getCalculatedValue();
			$recu = $excel -> getActiveSheet() -> getCell('B' . $i)->getCalculatedValue();
			$fecha_hoy = $excel -> getActiveSheet() -> getCell('A' . $i)->getCalculatedValue();
			$fecha_hoy=date_create("$fecha_hoy");
			$fecha_hoy = date_format($fecha_hoy,"Y/m/d H:i:s");
//	echo $fecha_hoy ."<br>";
			$letype = $excel -> getActiveSheet() -> getCell('C' . $i)->getCalculatedValue();
			$attestation = $excel -> getActiveSheet() -> getCell('D' . $i)->getCalculatedValue();
			$police = $excel -> getActiveSheet() -> getCell('E' . $i)->getCalculatedValue();
			$matricule = $excel -> getActiveSheet() -> getCell('F' . $i)->getCalculatedValue();
			$produit = $excel -> getActiveSheet() -> getCell('G' . $i)->getCalculatedValue();
			$assure = $excel -> getActiveSheet() -> getCell('H' . $i)->getCalculatedValue();
			$du = $excel -> getActiveSheet() -> getCell('I' . $i)->getCalculatedValue();
			$du=date_create("$du");
			$du = date_format($du,"Y/m/d H:i:s");
			$au = $excel -> getActiveSheet() -> getCell('J' . $i)->getCalculatedValue();
			$au=date_create("$au");
			$au = date_format($au,"Y/m/d H:i:s");
			$totale = $excel -> getActiveSheet() -> getCell('K' . $i)->getCalculatedValue();
			$espece = $excel -> getActiveSheet() -> getCell('L' . $i)->getCalculatedValue();
			$cheque = $excel -> getActiveSheet() -> getCell('M' . $i)->getCalculatedValue();
			$virement = $excel -> getActiveSheet() -> getCell('N' . $i)->getCalculatedValue();
			$reste = $excel -> getActiveSheet() -> getCell('O' . $i)->getCalculatedValue();
			$date_versement = $excel -> getActiveSheet() -> getCell('P' . $i)->getCalculatedValue();
			$date_versement=date_create("$date_versement");
			$date_versement = date_format($date_versement,"Y-m-d H:i:s");
			$mode_paiment = $excel -> getActiveSheet() -> getCell('Q' . $i)->getCalculatedValue();
			$cree_le = $excel -> getActiveSheet() -> getCell('R' . $i)->getCalculatedValue();

	//echo $idp . " - ";

			$consulta =  "INSERT INTO `proyectosis` (`recu`,`fecha_hoy`, `letype`, `attestation`, `police`, `matricule`, `produit`,`assure`, `du`, `au`, `totale`, `espece` ,  `cheque` , `virement`, `reste` , `date_versement`, `mode_paiment`, `cree_le`) VALUES ('$recu','$fecha_hoy','$letype','$attestation','$police', '$matricule', '$produit','$assure','$du','$au', '$totale', '$espece', '$cheque', '$virement' , '$reste', '$date_versement', '$mode_paiment','$cree_le')";

// $query = "INSERT INTO `pr` (`id`) VALUES ( '$id')";
			$result = $mysqli->query($consulta);
			echo $mysqli->error;
			$message = "Base de datos cargada correctamente";
			header("Location: index.php?mensaje=ok&respuesta=". $message);

		}

	}else{
		$message = "Debes seleccionar algun fichero o bien Fichero no permitido";
		header("Location: importarExecl.php?mensaje=ok&respuesta=" .$message);
	}

}
?>