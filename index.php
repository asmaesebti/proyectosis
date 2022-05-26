<?php 

session_start();
require_once('conexion.php');

$consultar = "select * from proyectosis order by cree_le desc limit 1";
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
	<div class="container">
		<div class="row">
			<div class="col">
				<a href="otro.php" class="btn btn-success pe-2 ps-2 fas fa-save">&nbsp; Enregistrer un client</a>
			</div>
			<div class="col">
				<a href="phpMail040322/enviarMailNotificacion.php" class="btn btn-success pe-2 ps-2 fas fa-save">&nbsp; Verifier echéance des polices</a>
			</div>
			<div class="col">
				<a href="addmore/addmore.php" class="btn btn-success pe-2 ps-2 fas fa-save">&nbsp; Enregistrer plusieurs clients</a>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<form method="POST" action="enregistrer.php" id="log">

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
								<label>Reçu nº:</label>
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<input type="text" class="form-control" name="recu" value="<?php echo (!empty($array['recu'])) ?  $array["recu"] + 1 :  "0" ;  ?>" readonly>
							</div>
						</div>
						
					</div>
					<div class="row">
						<div class="col col-3">
							<div class="form-group mt-3">
								<label>Date: *</label>
							</div>
						</div>
						<div class="col">
							<div class="form-group mb-3">
								<span class="error" style="color: red;"><?php if(isset($_SESSION['errorFecha_hoy'])) echo $_SESSION['errorFecha_hoy'] ;  ?></span>
								<input type="date" class="form-control" name="fecha_hoy" value="<?php echo (isset($_SESSION['fecha_hoy'])) ? $_SESSION['fecha_hoy'] : date("Y-m-d");  ?>" >
							</div>
						</div>
						
					</div>
					<div class="row">
						<div class="col col-3">
							<label>Type de l'affaire:</label>
						</div>
						<div class="col">
							<select class="form-select" aria-label="Default select example" name="leType">
								<option selected>Seleccioner une affaire</option>
								<option value="Affaire nouvelle" <?php echo (isset($_SESSION['leType']) && $_SESSION['leType']=="Affaire nouvelle") ? 'selected' : '';?>  > Affaire nouvelle</option>
								<option value="Renouvellement" <?php echo (isset($_SESSION['leType']) && $_SESSION['leType']=="Renouvellement") ? 'selected' : '';?>>Renouvellement</option>
								<option value="Changement vehicule" <?php echo  (isset($_SESSION['leType']) && $_SESSION['leType']=="Changement vehicule") ? 'selected' : '';?>>Changement vehicule</option>
								<option value="Duplicata" <?php echo (isset($_SESSION['leType']) && $_SESSION['leType']=="Duplicata") ? 'selected' : '';?>>Duplicata</option>
								<option value="Resiliation" <?php echo (isset($_SESSION['leType']) && $_SESSION['leType']=="Resiliation") ? 'selected' : '';?>>Resiliation</option>
								<option value="Autre provisoire" <?php echo (isset($_SESSION['leType']) && $_SESSION['leType']=="Autre provisoire") ? 'selected' : '';?>>Autre provisoire</option>
								<option value="Attestation définitive" <?php echo (isset($_SESSION['leType']) && $_SESSION['leType']=="Attestation définitive") ? 'selected' : '';?>>Attestation définitive</option>
								<option value="Autres" <?php echo (isset($_SESSION['leType']) && $_SESSION['leType']=="Autres") ? 'selected' : '';?>>Autres</option>
							</select>
							<span class="error" style="color: red;"><?php if(isset($_SESSION['errorLetype'])) echo $_SESSION['errorLetype'] ;  ?></span>
						</div>
					</div>
					
					<div class="row " hidden>
						<div class="col">
							<div class="custom-control custom-control-inline custom-radio">
								<input type="radio" id="affaire-nouvelle" name="leType"  class="custom-control-input" <?php if (isset($_SESSION['leType']) && $_SESSION['leType']=="Affaire nouvelle") echo 'checked';?> value="Affaire nouvelle" >
								<label for="affaire-nouvelle" class="custom-control-label">Affaire nouvelle</label>
							</div>
						</div>
						<div class="col">
							<div class="custom-control custom-control-inline custom-radio">
								<input type="radio" name="leType" id="renouvellement" value="Renouvellement" class="custom-control-input" <?php if (isset($_SESSION['leType']) && $_SESSION['leType']=="Renouvellement") echo "checked";?>>
								<label for="renouvellement" class="custom-control-label">Renouvellement</label>
							</div>
						</div>
						<div class="col">
							<div class="custom-control custom-control-inline custom-radio">
								<input type="radio" name="leType" id="changement-vehicule" value="Changement vehicule" class="custom-control-input" <?php if (isset($_SESSION['leType']) && $_SESSION['leType']=="Changement vehicule") echo "checked";?>>
								<label for="changement-vehicule" class="custom-control-label">Changement vehicule</label>
							</div>
						</div>
					</div>
					<div class="row mt-3" hidden>
						<div class="col">
							<div class="custom-control custom-control-inline custom-radio">
								<input type="radio" name="leType" id="duplicata" value="Duplicata" class="custom-control-input" <?php if (isset($_SESSION['leType']) && $_SESSION['leType']=="Duplicata") echo "checked";?>>
								<label for="duplicata" class="custom-control-label">Duplicata</label>
							</div>
						</div>
						<div class="col">
							<div class="custom-control custom-control-inline custom-radio">
								<input type="radio" name="leType" id="autres" value="Autres" class="custom-control-input" <?php if (isset($_SESSION['leType']) && $_SESSION['leType']=="Autres") echo "checked";?>>
								<label for="autres" class="custom-control-label">Autres</label>
								<span class="error" style="color: red;"><?php if(isset($_SESSION['errorLetype'])) echo $_SESSION['errorLetype'] ;  ?></span>
							</div>
						</div>
					</div>
					<div class="form-group mt-4">
						<label>Attestation : *</label><span class="error" style="color: red;"><?php if(isset($_SESSION['errorAttestation'])) echo $_SESSION['errorAttestation'] ;  ?></span>
						<input type="text" class="form-control" name="attestation" value="<?php echo (isset($_SESSION['attestation'])) ?  $_SESSION['attestation'] :  "" ;  ?>" >
						
					</div>
					<div class="form-group mt-4">
						<label>Nº Police : *</label><span class="error" style="color: red;"><?php if(isset($_SESSION['errorPolice'])) echo $_SESSION['errorPolice'] ;  ?></span>
						<input type="text" class="form-control" name="police" value="<?php echo (isset($_SESSION['police'])) ?  $_SESSION['police'] :  "" ;  ?>" >
						
					</div>
					<div class="form-group mt-4">
						<label>Matricule : *</label><span class="error" style="color: red;"><?php if(isset($_SESSION['errorMatricule'])) echo $_SESSION['errorMatricule'] ;  ?></span>
						<input type="text" class="form-control" name="matricule" value="<?php echo (isset($_SESSION['matricule'])) ?  $_SESSION['matricule'] :  "" ;  ?>" >
						
					</div>
					<div class="form-group mt-4">
						<label>Produit : *</label><span class="error" style="color: red;"><?php if(isset($_SESSION['errorProduit'])) echo $_SESSION['errorProduit'] ;  ?></span>
						<input type="text" class="form-control" name="produit" value="<?php echo (isset($_SESSION['produit'])) ?  $_SESSION['produit'] :  "" ;  ?>" >
						
					</div>
					<div class="form-group">
						<label>Assure : *</label><span class="error" style="color: red;"><?php if(isset($_SESSION['errorAssure'])) echo $_SESSION['errorAssure'] ;  ?></span>
						<input type="text" class="form-control" name="assure" value="<?php echo (isset($_SESSION['assure'])) ? $_SESSION['assure'] : "";  ?>">
						
					</div>
					<div class="form-group">
						<label>Periode : </label>
						<div class="row">
							<div class="col">
								<label>Du : *</label><span class="error" style="color: red;"><?php if(isset($_SESSION['errorDu'])) echo $_SESSION['errorDu'] ;  ?></span>
								<input type="date" class="form-control" name="du" value="<?php echo (isset($_SESSION['du'])) ? $_SESSION['du'] : "";  ?>" >
								
							</div>
							<div class="col">
								<label>Au : *</label><span class="error" style="color: red;"><?php if(isset($_SESSION['errorAu'])) echo $_SESSION['errorAu'] ;  ?></span>
								<input type="date" class="form-control" name="au" value="<?php echo (isset($_SESSION['au'])) ? $_SESSION['au'] : "" ;  ?>">
								
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row mt-3">
							<div class="col col-3">
								<label>Prime totale : *</label><span class="error" style="color: red;"><?php if(isset($_SESSION['errorTotale'])) echo $_SESSION['errorTotale'] ;  ?></span>
							</div>
							<div class="col col-7">
								<input type="number" class="form-control" id="totale" step="0.01" name="totale"  value="<?php echo (isset($_SESSION['totale'])) ? $_SESSION['totale'] : "" ;  ?>"   ><!-- onchange="sumar(this.value);" -->
							</div>
						</div>
						
						<div class="row mt-2">
							<div class="col col-3">
								<label>Espece :</label>
							</div>
							<div class="col col-7">
								<input type="number" class="form-control" id="espece" name="espece" step="0.01"  value="<?php echo (isset($_SESSION['espece'])) ? $_SESSION['espece'] : "0" ;  ?>" onfocus="if(this.value=='0'){ this.value=''; }"> <!-- onchange="sumar(this.value);" -->
							</div>
						</div>
						<div class="row mt-2">
							<div class="col col-3">
								<label>Cheque :</label>
							</div>
							<div class="col col-7">
								<input type="number" class="form-control" id="cheque" name="cheque" step="0.01"  value="<?php echo (isset($_SESSION['cheque'])) ? $_SESSION['cheque'] : "0" ;  ?>" onfocus="if(this.value=='0'){ this.value=''; }" ><!-- onchange="sumar(this.value);" -->
							</div>
						</div>
						<div class="row mt-1">
							<div class="col col-3">
								<label>Virement :</label>
							</div>
							<div class="col col-7">
								<input type="number" class="form-control" id="virement" name="virement" step="0.01" min="0" value="<?php echo (isset($_SESSION['virement'])) ? $_SESSION['virement'] : "0" ;  ?>" onfocus="if(this.value=='0'){ this.value=''; }">
							</div>
						</div>
						<div class="row">
							<div class="col col-3 mt-4">
								<label>Reste a regler :</label>
							</div>
							<div class="col col-7">
								<span>El resultado es: </span> <span id="spTotal"></span>
								<input type="number" class="form-control" id="reste" name="reste" step="0.01"  value="<?php echo (isset($_SESSION['reste'])) ? $_SESSION['reste'] : "0" ;  ?>" >
							</div>
						</div>
						<div class="row mt-3">
							<div class="col col-3 mt-2">
								<div class="form-group">
									<label>Date Versement: </label>
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<span class="error" style="color: red;"><?php if(isset($_SESSION['errorDate_versement'])) echo $_SESSION['errorDate_versement'] ;  ?></span>
									<input type="date" class="form-control" name="date_versement" value="<?php echo (isset($_SESSION['date_versement'])) ? $_SESSION['date_versement'] : "0000/00/00";  ?>" >
								</div>
							</div>

						</div>
						<div class="row mt-3" hidden>
							<div class="col col-3 mt-4">
								<div class="form-group">
									<label>Mode de paiment: </label>
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<span class="error" style="color: red;"><?php if(isset($_SESSION['errorModePaiment'])) echo $_SESSION['errorModePaiment'] ;  ?></span>
									<input type="text" class="form-control" name="mode_paiment" value="<?php echo (isset($_SESSION['mode_paiment'])) ? $_SESSION['mode_paiment'] : "----";  ?>" >
								</div>
							</div>

						</div>

					</div>
					<div class="row mt-3">
						<div class="col">
							<button type="submit" class="btn btn-success p-3" name="enregistrer" >Enregistrer</button>
						</div>
						<div class="col">
							<a class="btn btn-success" href="laListe.php">La liste de tous les reçus</a>
						</div>
						<div class="col">
							<a class="btn btn-success" href="generarPDF.php" target="_blank">Imprimer le Reçu</a>
						</div>
						<div class="col">
							<a class="btn btn-success" href="index.php">Rafrechir la page</a>
						</div>
						<div class="col">
							<a class="btn btn-success" href="importarExecl.php">Importar excel</a>
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




	</script>

</body>
</html>

<?php 

unset($_SESSION['errorLetype']);
unset($_SESSION['errorPolice']);
unset($_SESSION['errorAssure']);
unset($_SESSION['errorDu']);
unset($_SESSION['errorAu']);
unset($_SESSION['errorTotale']);

unset($_SESSION['errorFecha_hoy']);
unset($_SESSION['errorAttestation']);
unset($_SESSION['errorMatricule']);
unset($_SESSION['errorProduit']);
unset($_SESSION['errorDate_versement']);
// unset($_SESSION['errorModePaiment']);

unset($_SESSION['leType']);
unset($_SESSION['police']);
unset($_SESSION['assure']);
unset($_SESSION['du']);
unset($_SESSION['au']);
unset($_SESSION['totale']);
unset($_SESSION['cheque']);
unset($_SESSION['espece']);
unset($_SESSION['reste']);
unset($_SESSION['virement']);

unset($_SESSION['fecha_hoy']);
unset($_SESSION['attestation']);
unset($_SESSION['matricule']);
unset($_SESSION['produit']);
unset($_SESSION['date_versement']);
// unset($_SESSION['mode_paiment']);

?>