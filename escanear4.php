<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" type="text/css"/>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="index.css" rel="stylesheet">
	<title></title>
</head>
<body>
	<script src="html5-qrcode.min_.js"></script>
	<style>
		.result{
			background-color: green;
			color:#fff;
			padding:20px;
		}
		.row{
			display:flex;
			flex-direction: column;
		}
	</style>

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
				<div style="width:500px;" id="reader"></div>
			</div>

			<div class="col" style="padding:30px;">
				<h4>SCAN RESULT</h4>
				<div id="result">Result Here</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<a class="btn btn-success" href="modifierRecuApartirCookie.php" >Modifier les données de l'assuré</a>
			</div>
			<div class="col mt-3">
				<a class="btn btn-success" href="index.php" >Retoruner au formulaire</a>
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
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
	<script src="cree_cookie.js"></script> 
	<script type="text/javascript">
		function onScanSuccess(qrCodeMessage) {
			document.getElementById('result').innerHTML = '<span class="result">'+qrCodeMessage+'</span>';
			//console.log(qrCodeMessage);
			createCookie("codigo", qrCodeMessage, "10");
		}

		function onScanError(errorMessage) {
  //handle scan error
}

var html5QrcodeScanner = new Html5QrcodeScanner(
	"reader", { fps: 10, qrbox: 250 });
html5QrcodeScanner.render(onScanSuccess, onScanError);



</script>
<!-- <?php echo $_COOKIE["codigo"]; 

?> -->
</body>
</html>