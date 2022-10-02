<?php 

session_start();
require_once('conexion.php');

mysqli_query($connection,"SET CHARACTER SET 'utf8'");
mysqli_query($connection,"SET SESSION collation_connection ='utf8_unicode_ci'");

// $consultar = "select * from proyectosis";
// $query = mysqli_query($connection, $consultar);
// $array = mysqli_fetch_array($query);

$client = $_GET['client'];
$prenom = $_GET['prenom'];
$address = $_GET['address'];

if (!isset($_GET['client'])) {
	$client_sesion = null;

}else{
	$client = $_GET['client'];
	$_SESSION['client'] = $client;
	
}
if (!isset($_GET['prenom'])) {
	$prenom_sesion = null;

}else{
	$prenom = $_GET['prenom'];
	$_SESSION['prenom'] = $prenom;
	
}
if (!isset($_GET['address'])) {
	$address_sesion = null;

}else{
	$address = $_GET['address'];
	$_SESSION['address'] = $address;
	
}


$consultarClient = "SELECT * FROM proyectosis WHERE assure like '$client' and prenom like '$prenom' ";
$queryClient = mysqli_query($connection, $consultarClient);
$arrayClient = mysqli_fetch_array($queryClient);
$rowcount=mysqli_num_rows($queryClient);

//	echo $array["recu"];


?>
<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->
<head>
	<meta charset="utf8" />
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
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
	
	<!-- SELECT * FROM `proyectosis` WHERE assure like '%ddd%' and prenom like '%ddd%' -->

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
				<h1 class= ""> </h1>
				<section>

					<!-- Example single danger button -->
					<?php 

					

					// $consultarClient = "SELECT recu, assure, prenom FROM `proyectosis`";
					// $queryClient = mysqli_query($connection, $consultarClient);
					// $arrayClient = mysqli_fetch_array($queryClient);

// href="generarFacturebyRecu.php?recu=<?php echo $row['recu'];

					?>
					<div class="btn-group m-3">
					<!-- 	<button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
							Selectionner un client pour imprimer ses factures
						</button>
						<ul class="dropdown-menu">
							<?php foreach ($queryClient as $row) { ?>
								<li><a class="dropdown-item cliente" id=""  target="_blank" href="generarFacturebyClient.php?client=<?php echo $row['assure']; ?>"><?php echo $row['assure'] . " " . $row['prenom']; ?></a></li>

							<?php } ?>
						</ul> 
						<label for="le_client" class="btn btn-primary ms-3" id="mostrar_cliente"></label> -->
					<!-- 	<script>
							var btn = document.getElementsByClassName('cliente');
							for (var i = 0; i < btn.length; i++) {
								btn[i].addEventListener("click", function() {
									document.getElementById("mostrar_cliente").innerHTML = "Le client seleccioner est : " + this.innerHTML;
								});
							}
						</script> -->

						
					<!-- 	<button type="button" class="btn btn-primary dropdown-toggle ms-5 me-5" data-bs-toggle="dropdown" aria-expanded="false" target="_blank" href="">
							Imprimer toutes les factures par client
						</button> -->

					<!-- 	<label for="le_client" class="btn btn-primary me-3">Selectionner un client pour imprimer ses factures :</label>

						<select name="le_client" id="le_client">
							<option value="" >Selectionner un client</option>
							<?php foreach ($queryClient as $row) { ?>
								<option value="<?php echo $row['assure']; ?>" ><?php echo $row['assure'] . " " . $row['prenom']; ?></option>
							<?php } ?>
						</select> -->
					</div>


				</section>
				<div>
					<label for="le_client" class="btn btn-primary me-3"><?php echo utf8_decode('Rabat, le : '.date("d/m/Y")); ?></label>
				<div>
					
					<label for="le_client" class="btn btn-primary me-3 mt-3"><?php echo utf8_decode($client) . " " . utf8_decode($_GET["prenom"]); ?></label>
					
				</div>
				<div>
					
					<label for="le_client" class="btn btn-primary me-3 mt-3"><?php echo  utf8_decode($_GET["address"]); ?></label>
					
				</div>
					<h2 class= "" style="text-align: center; color: red; "><u> <?php echo utf8_decode("QUITTANCE DE PRIME"); ?></u></h2>


				<table class="table table-hover" id="laLista">
					<thead>
						<tr>
							<th scope="col">N° Police</th>
							<th scope="col">Période</th>
							<th scope="col">Désignation</th>
							<th scope="col">Prime Nette</th>
							<th scope="col">Taxes</th>
							<th scope="col">T.P</th>
							<th scope="col">ACCESOIRES</th>
							<th scope="col">Total TTC</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						foreach ($queryClient as $row) {
							?>
							<tr>
								<td><?php echo utf8_decode($row['police']); ?></td>
								<th scope="row"><?php echo utf8_decode($row["du"] . " AU " . $row["au"]); ?></th>
								<td><?php echo utf8_decode($row["designation"]); ?></td>
								<td><?php echo utf8_decode($row["prime_net"]); ?></td>
								<td><?php echo utf8_decode($row["taxes"]); ?></td>
								<td><?php echo utf8_decode($row["tp"]); ?></td>
								<td><?php echo utf8_decode($row["accesoires"]); ?></td>
								<td><?php echo utf8_decode($row["totale"]); ?></td>
							</tr>
							<?php }	?>

					</tbody>
					<tfoot>
						
						
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
				<!-- 	<div class="col-2">
						<a class="btn btn-success" href="form_date.php" role="button">La liste par date</a>
					</div> -->
					<div class="col-2">
						<a class="btn btn-danger" href="laListeExcelFactureParClient.php" role="button">La liste en excel</a>
					</div>
				<!-- 	<div class="col-2">
						<a class="btn btn-primary" href="copiaSeguridad.php" role="button">Sauvegarde de securité de la base de données</a>
					</div> -->
					<!-- <div class="col-2">
						<a class="btn btn-success" href="diagram.php"  role="button">Diagram du montant</a>
					</div> -->

					<div class="col-1 ">
						<a class="btn btn-success" href="index.php" role="button">Salir</a>
					</div>
					<!-- <div class="col-1">
						<a class="btn btn-danger" href="laListeExcelElimines.php" role="button">La liste des eliminés</a>
					</div> -->
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

	<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#le_client').change(function() {
				$.ajax({
					type: 'GET',
					url: 'generarFacturebyClient.php',
					data: {
						itemID: $(this).val()
					},
					dataType: 'json',
					success: function(data) {
                // do whatever here
                alert(data);
                console.log(data);
            }
        });
			});
		});
	</script>

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
				dom: 'Bfrtip',
				buttons: [
				{ extend: 'csv', className: 'btn btn-success' },
				{ extend: 'excel', className: 'btn btn-warning' },
				{ extend: 'pdf', className: 'btn btn-danger' },
				],

				drawCallback: function () {
					var api = this.api();
					var total = api.column( 3, {"filter":"applied"}).data().sum();
					$('#monto').html(total.toFixed(2));
					var total1 = api.column( 4, {"filter":"applied"}).data().sum();
					$('#monto1').html(total1.toFixed(2));
					var total2 = api.column( 5, {"filter":"applied"}).data().sum();
					$('#monto2').html(total2.toFixed(2));
					var total3 = api.column( 6, {"filter":"applied"}).data().sum();
					$('#monto3').html(total3.toFixed(2));
					var total4 = api.column( 7, {"filter":"applied"}).data().sum();
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