<?php 
session_start();
require_once('conexion.php');
require_once('valorSeguro.php');
include('funcionesValidacion.php');

$error_date_avant = $error_date_apres = "";
$query = "";
$contador = 0;

//echo $_POST['date_avant'] . " et ".$_POST['date_apres'];


if (!isset($_POST['date_avant'])) {
	$date_avant = null;

}else{
	$date_avant = $_POST['date_avant'];
	$date_avant = valorSeguro($date_avant);
	$_SESSION['date_avant'] = $date_avant;
	
}

if ($date_avant != null) {
	//echo "<br>";
	//echo "La date  est correcte";
	$contador++;
}else{
	$error_date_avant =  "Tu dois choisir une date fecha_hoy";
	$_SESSION['error_date_avant'] = $error_date_avant;
	echo "<br>";
	echo "Tu dois choisir une date fecha_hoy";
}

if (!isset($_POST['date_apres'])) {
	$date_apres = null;

}else{
	$date_apres = $_POST['date_apres'];
	$date_apres = valorSeguro($date_apres);
	$_SESSION['date_apres'] = $date_apres;
	
}

if ($date_apres != null) {
//	echo "<br>";
//	echo "La date  est correcte";
	$contador++;
}else{
	$error_date_apres =  "Tu dois choisir une date date_apres";
	$_SESSION['error_date_apres'] = $error_date_apres;
	echo "<br>";
	echo "Tu dois choisir une date date_apres";
}

if ($contador == 2) {
	//SELECT * FROM `proyectosis` WHERE fecha_hoy BETWEEN "2022-05-10" and "2022-05-11"
	$consultar = "SELECT * FROM `proyectosis` WHERE fecha_hoy BETWEEN ' $date_avant' AND '$date_apres'";


	$query = mysqli_query($connection, $consultar);
	$array = mysqli_fetch_array($query);


} else {
	
}

// if ($query) {
// 	echo "<br>Données Consultées correctement";


// 	header("Location: form_date.php?mensaje=ok&respuesta=Données Consultées correctement");

// }else{

// 	echo "<br>Rien n´est trouvées dans la base de données";
// 	echo "<br>" . mysqli_error($connection);


// 	header("Location: form_date.php?mensaje=ok&respuesta=Rien n´est trouvées dans la base de données");
// }



 ?>

 <!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->
<head>
	<meta charset="UTF-8">
	<title>Proyecto SIS</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" type="text/css"/>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css"/>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.css"/>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="laListe.css">
</head>
<body class="fondo" style="background-color: beige;">

	<?php
	if(isset($_GET['mensaje']) == 'ok') {
		?>
		<script type="text/javascript">
			$(document).ready(function() {
				swal({
					title: '<?php echo $_GET['respuesta']; ?>',
					text: '<?php echo $_GET['respuesta']; ?>',
					type: 'success'
				});
			});
		</script>
		<?php
	}
	?>

	<header class="container">
		<img src="logo.png" width="100%" alt="">
	</header>
	<div class="container-fluid conjunto">
		<div class="row">
			<div class="col">
				<h1>La liste de tous les reçus</h1>
				<h3>Les dates selectionèes son: la date avant : <span style="color:red; font-size: 1.3em;"><?php echo $date_avant; ?></span> et la date aprés : <span style="color:red; font-size: 1.3em;"><?php echo $date_apres; ?></span>.</h3>
				<table class="table table-hover" id="laLista">
					<thead>
						<tr>
							<th scope="col">DATE</th>
							<th scope="col">REÇU</th>
							<th scope="col">LE TYPE</th>
							<th scope="col">ATTESTATION</th>
							<th scope="col">POLICE</th>
							<th scope="col">MATRICULE</th>
							<th scope="col">PRODUIT</th>
							<th scope="col">ASSURÉ</th>
							<th scope="col">PERIODE DU</th>
							<th scope="col">PERIODE AU</th>
							<th scope="col">PRIME TOTALE</th>
							<th scope="col">ESPECE</th>
							<th scope="col">CHEQUE</th>
							<th scope="col">VIREMENT</th>
							<th scope="col">RESTE</th>
							<th scope="col">DATE VERSEMENT</th>
							<th scope="col">CREE LE</th>
							<th scope="col">Modificar</th>
							<th scope="col">Eliminar</th>
							<th scope="col">Imprimer</th>
						</tr>
					</thead>
					<tbody>
						<?php 

						foreach ($query as $row) {
							?>
							<tr>
								<td><?php echo $row['fecha_hoy']; ?></td>
								<th scope="row"><?php echo $row['recu']; ?></th>
								<td><?php echo $row['letype']; ?></td>
								<td><?php echo $row['attestation']; ?></td>
								<td><?php echo $row['police']; ?></td>
								<td><?php echo $row['matricule']; ?></td>
								<td><?php echo $row['produit']; ?></td>
								<td><?php echo $row['assure']; ?></td>
								<td><?php echo $row['du']; ?></td>
								<td><?php echo $row['au']; ?></td>
								<td><?php echo $row['totale']; ?></td>
								<td><?php echo $row['espece']; ?></td>
								<td><?php echo $row['cheque']; ?></td>
								<td><?php echo $row['virement']; ?></td>
								<td><?php echo $row['reste']; ?></td>
								<td style="color: <?php echo ($row['date_versement'] == '1970-01-01') ? 'beige' : '';  ?>;"><?php echo $row['date_versement']; ?></td>
								
								<td><?php echo $row['cree_le']; ?></td>
								<td class="align-middle"><a class="btn btn-warning" href="modifierRecu.php?recu=<?php echo $row['recu']; ?>">modificar</a> </td>
								<td class="align-middle"><a class="btn btn-danger" href="eliminerRecu.php?recu=<?php echo $row['recu']; ?>">eliminar</a></td>
								<td class="align-middle"><a class="btn btn-success" target="_blank" href="generarPDFbyRecu.php?recu=<?php echo $row['recu']; ?>">Imprimer</a></td>
							</tr>

							<?php
						}

						?>

					</tbody>
					<tfoot>
						<td class="bg-grays-active color-palette"><b></b></td>
						<td class="bg-teals-active color-palette text-center">
							<strong id="abiertoEnTiempo"></strong>
						</td>
						<td class="bg-teals-active color-palette text-center">
							<strong></strong>
						</td>
						<td class="bg-teals-active color-palette text-center">
							<strong></strong>
						</td>
						<td class="bg-teals-active color-palette text-center">
							<strong></strong>
						</td>
						<td class="bg-teals-active color-palette text-center">
							<strong></strong>
						</td>
						<td class="bg-teals-active color-palette text-center">
							<strong></strong>
						</td>
						<td class="bg-teals-active color-palette text-center">
							<strong></strong>
						</td>
						<td class="bg-teals-active color-palette text-center">
							<strong></strong>
						</td>
						<td class="bg-teals-active color-palette text-center">
							<strong><b>Total </b></strong>
						</td>
						<td class="bg-teals-active color-palette text-center">
							<strong id="monto">0</strong>
						</td>
						</td>
						<td class="bg-teals-active color-palette text-center">
							<strong id="monto1">0</strong>
						</td>
						<td class="bg-teals-active color-palette text-center">
							<strong id="monto2">0</strong>
						</td>
						<td class="bg-teals-active color-palette text-center">
							<strong id="monto3">0</strong>
						</td>
						<td class="bg-teals-active color-palette text-center">
							<strong id="monto4">0</strong>
						</td>
					</tfoot>
				</table>
				<div class="row mt-3 ">
					<div class="col-2">
						<a class="btn btn-warning" href="index.php" role="button">Retourner au formulaire</a>
					</div>
					<div class="col-2">
						<a class="btn btn-success" href="laListe.php" role="button">La liste Generale</a>
					</div>
					<div class="col-2">
						<a class="btn btn-danger" href="laListeExcelDate.php" role="button">La liste en excel</a>
					</div>
					<div class="col-3 ">
						<a class="btn btn-success" href="form_date.php" role="button">Retoure au formulaire de date</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer class="container text-center mt-3">
		<div class="bord">
			Intermédiaire d’assurances régi par la loi N° 17-99 portant Code des Assurances - N° Agrément : A 19184541200881001 du 22/10/2008
		</div>
		<div>
			Angle Avenue de la Résistance et Rue de Paris - Magasin N° 4 - Océan - Rabat 
		</div>
		<div>
			Tél. : 05 37 73 31 31 – Fax : 05 37 73 70 70
		</div>
		<div>
			R.C. : 81798 – Patente : 26330191 – CNSS : 7040306 – I.F. : 34340738 – ICE : 001695528000088
		</div>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
	</script> 
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.js"></script>
	<script type="text/javascript">
		$(document).ready( function () {
			jQuery.fn.dataTable.Api.register( 'sum()', function ( ) {
				return this.flatten().reduce( function ( a, b ) {
					if ( typeof a === 'string' ) {
						a = a.replace(/[^\d.-]/g, '') * 1;
					}
					if ( typeof b === 'string' ) {
						b = b.replace(/[^\d.-]/g, '') * 1;
					}
					return a + b;
				}, 0);
			});
			var table = $('#laLista').DataTable(
			{
				drawCallback: function () {
					var api = this.api();
					var total = api.column( 10, {"filter":"applied"}).data().sum();
					$('#monto').html(total.toFixed(2));
					var total1 = api.column( 11, {"filter":"applied"}).data().sum();
					$('#monto1').html(total1.toFixed(2));
					var total2 = api.column( 12, {"filter":"applied"}).data().sum();
					$('#monto2').html(total2.toFixed(2));
						var total3 = api.column( 13, {"filter":"applied"}).data().sum();
					$('#monto3').html(total3.toFixed(2));
						var total4 = api.column( 14, {"filter":"applied"}).data().sum();
					$('#monto4').html(total4.toFixed(2));

				}
			});
		} );
	</script>

</body>
</html>
<?php 

unset($_SESSION['date_versement']);

?>