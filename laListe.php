<?php 

session_start();
require_once('conexion.php');

$consultar = "select * from proyectosis";
$query = mysqli_query($connection, $consultar);
$array = mysqli_fetch_array($query);

//	echo $array["recu"];


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
	<div class="container-fluid ">
		<div class="row">
			<div class="col">
				<h1>La liste de tous les reçus</h1>
				<table class="table table-hover" id="laLista">
					<thead>
						<tr>
							<th scope="col">REÇU</th>
							<th scope="col">LE TYPE</th>
							<th scope="col">POLICE</th>
							<th scope="col">ASSURÉ</th>
							<th scope="col">PERIODE DU</th>
							<th scope="col">PERIODE AU</th>
							<th scope="col">PRIMER TOTALE</th>
							<th scope="col">ESPECE</th>
							<th scope="col">CHEQUE</th>
							<th scope="col">AUTRE</th>
							<th scope="col">RESTE</th>
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
								<th scope="row"><?php echo $row['recu']; ?></th>
								<td><?php echo $row['letype']; ?></td>
								<td><?php echo $row['police']; ?></td>
								<td><?php echo $row['assure']; ?></td>
								<td><?php echo $row['du']; ?></td>
								<td><?php echo $row['au']; ?></td>
								<td><?php echo $row['totale']; ?></td>
								<td><?php echo $row['espece']; ?></td>
								<td><?php echo $row['cheque']; ?></td>
								<td><?php echo $row['autre']; ?></td>
								<td><?php echo $row['reste']; ?></td>
								<td><?php echo $row['cree_le']; ?></td>
								<td class="align-middle"><a class="btn btn-warning" href="modifierRecu.php?recu=<?php echo $row['recu']; ?>">modificar</a> </td>
								<td class="align-middle"><a class="btn btn-danger" href="eliminerRecu.php?recu=<?php echo $row['recu']; ?>">eliminar</a></td>
								<td class="align-middle"><a class="btn btn-success" target="_blank" href="generarPDFbyRecu.php?recu=<?php echo $row['recu']; ?>">Imprimer</a></td>
							</tr>

							<?php
						}

						?>

					</tbody>
				</table>
				<div class="row mt-3 ">
					<div class="col d-flex justify-content-center align-content-center">
						<a class="btn btn-warning" href="index.php" role="button">Retourner au formulaire</a>
					</div>
					<div class="col d-flex justify-content-center align-content-center">
						<a class="btn btn-danger" href="laListeExcel.php" role="button">La liste en excel</a>
					</div>
						<div class="col d-flex justify-content-center align-content-center">
						<a class="btn btn-primary" href="copiaSeguridad.php" role="button">Sauvegarde de securité de la base de données</a>
					</div>

					<div class="col d-flex justify-content-center align-content-center">
						<a class="btn btn-success" href="index.php" role="button">Salir</a>
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
			$('#laLista').DataTable();
		} );
	</script>
	
</body>
</html>
