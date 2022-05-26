<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="mohammed">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.css"/>


	<!-- 	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.23/jspdf.plugin.autotable.min.js"></script> -->
	
	

	<title>Les clients</title>
</head>
<body class="bg-dark">
	<div class="container">
		<div class="row m-4">
			<div class="col-lg-12 m-auto">
				<div class="card shadow">
					<div class="card-header">
						<div class="row">
							<div class="col">
								<h4>Ajouter les clients</h4>
							</div>
							<div class="col col-2">
								<a class="btn btn-primary" href="../index.php">Retour au formulaire</a>
							</div>
						</div>
						
					</div>
					<div class="card-body p-4">
						<div id="show_alert"></div>
						<form action="#" method="POST" id="add_form">
							<div id="show_item">
								<div class="row">
									<div class="col-md-2 mb-2">
										<input type="text" name="nombre[]" class="form-control" placeholder="Nom client" required>
									</div>
									<div class="col-md-3 mb-3">
										<input type="text" name="apellidos[]" class="form-control" placeholder="Prenom client" required>
									</div>
									<div class="col-md-3 mb-3">
										<input type="text" name="email[]" class="form-control" placeholder="Email client" required>
									</div>
									<div class="col-md-2 mb-2">
										<input type="text" name="telefono[]" class="form-control" placeholder="Telephone client" required>
									</div>
									<div class="col-md-2 mb-2 d-grid">
										<button class="btn btn-success add_item_btn" >Ajouter un cliente</button>
									</div>
								</div>
							</div>
							<div class="col-md-4 mb-3 d-grid">
								<input type="submit" value="Ajouter" class="btn btn-primary" id="add_btn">
								<a href="pdf.php" class="btn btn-warning m-1 float-end " target="_blank"><i class="fas fa-table fa-lg"></i>&nbsp;&nbsp;Liste des clients en PDF</a>
								<a href="laListeExcelClients.php" class="btn btn-danger m-1 float-end " target="_blank"><i class="fas fa-table fa-lg"></i>&nbsp;&nbsp;Liste des clients en Excel</a>
								<a hidden href="indexXML.php" class="btn btn-warning m-1 float-end " target="_blank"><i class="fas fa-table fa-lg"></i>&nbsp;&nbsp;Imprimir XML</a>
								<a hidden href="carousel2.php" class="btn btn-danger m-1 float-end " target="_blank"><i class="fas fa-table fa-lg"></i>&nbsp;&nbsp;CREAR CAROUSSEL CON SUBIDA DE FICHERO</a>
							</div>

						</form>
					</div>
					
				</div>
				
			</div>
		</div>
	</div>

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script type="text/javascript" src="addmore.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
</body>
</html>