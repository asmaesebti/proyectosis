<?php 
header('Content-Type: text/html; charset=utf8');  
session_start();
require_once('conexion.php');

mysqli_query($connection,"SET CHARACTER SET 'utf8'");
mysqli_query($connection,"SET SESSION collation_connection ='utf8_unicode_ci'");

$id = $_GET['id'];

$consultar = "SELECT * FROM usuarios WHERE id = '$id'";
$query = mysqli_query($connection, $consultar);


//	echo $array["recu"];


?>

<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<title>Proyecto SIS</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" type="text/css"/>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.css"/>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css"/>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>
	<link href="index.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
</head>
<body>

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
	<?php 
	while ($row = mysqli_fetch_assoc($query)) {

		?>
		<div class="container">
			<div class="row">
				<div class="col">
					<form method="POST" action="procesar_modifierClient.php" id="log">
						
						<div class="row">
							<div class="col">
								<div class="form-group mt-3">
									<?php setlocale(LC_ALL,"es_ES"); echo strftime("%A %d de %B del %Y"); ?>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col col-3">
								<div class="form-group mt-3">
									<label>ID nº:</label>
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<input type="text" class="form-control" name="id" value="<?php echo $row["id"]; ?>" readonly>
								</div>
							</div>
							
						</div>
						<div class="row">
							<div class="col col-3">
								<div class="form-group mt-3">
									<label>Nom: *</label>
								</div>
							</div>
							<div class="col">
								<div class="form-group mb-3">
									<span class="error" style="color: red;"><?php if(isset($_SESSION['errorFecha_hoy'])) echo $_SESSION['errorFecha_hoy'] ;  ?></span>
									<input type="text" class="form-control" name="nombre" value="<?php echo $row['nombre']; ?>" >
								</div>
							</div>
							
						</div>
					
							<div class="form-group mt-4">
								<label>Prenom : *</label><span class="error" style="color: red;"><?php if(isset($_SESSION['errorAttestation'])) echo $_SESSION['errorAttestation'] ;  ?></span>
								<input type="text" class="form-control" name="apellidos" value="<?php echo $row['apellidos']; ?>" >

							</div>
							<div class="form-group mt-4">
								<label>Email : *</label><span class="error" style="color: red;"><?php if(isset($_SESSION['errorPolice'])) echo $_SESSION['errorPolice'] ;  ?></span>
								<input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>" >

							</div>
							<div class="form-group mt-4">
								<label>Telephone : *</label><span class="error" style="color: red;"><?php if(isset($_SESSION['errorMatricule'])) echo $_SESSION['errorMatricule'] ;  ?></span>
								<input type="text" class="form-control" name="telefono" value="<?php echo $row['telefono']; ?>" >

							</div>
							
							<div class="row mt-3">
								<div class="col">
									<button type="submit" class="btn btn-success p-3" name="enregistrer" >Modifier</button>
								</div>
								<div class="col">
									<a class="btn btn-success" href="laListeClient.php" >La liste de tous les clients</a>
								</div>
								<div class="col">
									<a class="btn btn-success" href="index.php" >Retourner au formulaire</a>
								</div>
							</div>
							<div class="row">
								<p><span class="error">* Champs obligatoires</span></p>
							</div>
						</form>
					</div>
				</div>
				<div class="row mt-3 mb-5 ">
					<div class="col text-center ">
						<span class="firma">Signature Production</span>
					</div>
					<div class="col text-center">
						<span class="firma">Signature Client</span>
					</div>
				</div>

			</div>
			<?php
		}

		?>
		<footer class="container text-center">
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
		<script type="text/javascript">
		// esta funcion no se utiliza porque no resta bien pero si suma muy bien
		function restar (valor) {
			var total = 0;	
		  valor = parseFloat(valor); // Convertir el valor a un entero (número).

		  total = document.getElementById('spTotal').innerHTML;

		  // Aquí valido si hay un valor previo, si no hay datos, le pongo un cero "0".
		  total = (total == null || total == undefined || total == "") ? 0 : total;

		  /* Esta es la resta. */
		  total =  (parseFloat(valor) - parseFloat(total));

		  // Colocar el resultado de la suma en el control "span".
		  document.getElementById('spTotal').innerHTML = total;
		  document.getElementById('reste').value = total;
		}

		$(document).ready(function() {
			if($("#log").length){
				$( "#totale" ).keyup(function() {
					$.sum();          
				}); 
				$( "#espece" ).keyup(function() {
					$.sum();          
				});
				$( "#cheque" ).keyup(function() {
					$.sum();          
				}); 
			}   
			$.sum = function(){
				$("#reste").val((parseFloat($("#totale").val()) - parseFloat($("#espece").val()) -parseFloat($("#cheque").val())).toFixed(2));
			} 
		});

		// $('#e2').change(function(){
		// 	var opt = $("#e2 option:selected" ).val();
  //           console.log(opt); //output console log
  //       });




</script>

</body>
</html>

