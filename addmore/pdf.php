<?php 

	require_once('dompdf/autoload.inc.php');
	use Dompdf\Dompdf;

	$conn = new PDO('mysql:host=localhost;dbname=proyectosis','root','');

	$sql ="select * from usuarios";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$filas = $stmt->fetchAll(PDO::FETCH_ASSOC);

	$gt = 0;
	$i = 1;

	$html = '<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Factura</title>
	<style type="text/css">
		h2{
			font-family: Verdana, Geneva, Tahoma , sans-serif;
			text-align: center;
		}
		table{
			font-family: Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}
		td, th{
			border:  1px solid #444;
			padding: 8px;
			text-align: center;
		}
		.my-table{
			text-align: right;
		}
		#sign{
			text-align: right;
			padding-top: 50px;
		}
	</style>
</head>
<body>
	<h2>Liste de clients</h2>
	<table>
		<thead>
			<tr>
				<td>ID</td>
				<td>NOMBRE</td>
				<td>APELLIDOS</td>
				<td>EMAIL</td>
				<td>TELEPHONE</td>
			</tr>
		</thead>
		<tbody>';

		foreach ($filas as $fila) {
			$html .= '<tr>
				<td>'.$i.'</td>
				<td>'.$fila['nombre'].'</td>
				<td>'.$fila['apellidos'].'</td>
				<td>'.$fila['email'].'</td>
				<td>'.$fila['telefono'].'</td>
			</tr>';
			
		}
		$html .= '</tbody>
	
		<tr>
			<td colspan="5" id="sign">Signature</td>
			
		</tr>
	</table>
</body>
</html>';

$dompdf = new Dompdf;
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream('liste.pdf', ['Attachment' => 0]);



 ?>

			
		