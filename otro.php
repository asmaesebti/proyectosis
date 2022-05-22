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
	
	<link href="index.css" rel="stylesheet">
	<link href="otro.css" rel="stylesheet">
	<!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>

	<header class="container">
		<img src="logo.png" width="100%" alt="">
	</header>


	<div class="container">
		<!-- Button trigger modal -->
		<div class="row">
			<div class="col">
				<button type="button" class="btn btn-primary fas fa-user-plus fa-lg ps-2 pe-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
					&nbsp;Créer un client
				</button>
			</div>
			<div class="col">
				<button type="button" class=" btn btn-primary mb-4 fas fa-bars pe-2 ps-2" id="ocultarTabla" >&nbsp; Cachée la liste</button>
				<button type="button" class="btn btn-primary mb-5 fas fa-eye pe-2 ps-2" id="mostrarTabla" >&nbsp; Montrer la liste</button>
			</div>
			<div class="col">
				<a href="index.php" class="btn btn-success">&nbsp; Retoruner au formulaire</a>
			</div>
			<div class="col">
				<a href="action.php?export=excel" class="btn btn-success m-1 float-end "><i class="fas fa-table fa-lg ps-2"></i>&nbsp;&nbsp;Exporter a excel</a>
			</div>
			<div class="col">
				<a href="generarPDFListe.php" target="_blank" class="btn btn-warning m-1 float-end ps-2 pe-2 "><i class="fas fa-table fa-lg"></i>&nbsp;&nbsp;Exporter a PDF</a>
			</div>


			<div class="row">
				<div class="col-lg-12">
					<div id="showUser" class="table-responsive ocultar">
						<h3 class="text-center text-success" style="margin-top:150px">Cargando.....</h3>


					</div>
				</div>
			</div>
			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Créer un client</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<form action="" method="post" id="form-data">
								<div class="form-group mb-3 mt-3">
									<input type="text" name="nombre" placeholder="Nom" class="form-control" required>
								</div>
								<div class="form-group mb-3 mt-3">
									<input type="text" name="apellidos" placeholder="Prenom" class="form-control" required>
								</div>
								<div class="form-group mb-3 mt-3">
									<input type="email" name="email" placeholder="Email" class="form-control" required>
								</div>
								<div class="form-group mb-3 mt-3">
									<input type="tel" name="telefono" placeholder="Telephone" class="form-control" required>
								</div>
								<div class="form-group mb-3 mt-3 ">
									<button type="submit" name="insert" id="insert"  class="btn btn-danger fas fa-plus ps-2 pe-2">&nbsp;Ajouter un client&nbsp;</button>
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary ps-2 pe-2 fas fa-sign-out-alt" data-bs-dismiss="modal">&nbsp; Sortir</button>
							<button type="button" class="btn btn-primary fas fa-save ps-2 pe-2">&nbsp; Autre chose</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<!-- Modificar  usurio Modal -->
		<div class="modal fade" id="editModal">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">Modifier un client</h4>
						<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
					</div>

					<!-- Modal body -->
					<div class="modal-body ps-4 pe-4">
						<form action="" method="post" id="edit-form-data">
							<input type="hidden" name="id" id="id" >
							<div class="form-group mb-3 mt-3">
								<input type="text" name="nombre" id="nombre" class="form-control" required>
							</div>
							<div class="form-group mb-3 mt-3">
								<input type="text" name="apellidos" id="apellidos" class="form-control" required>
							</div>
							<div class="form-group mb-3 mt-3">
								<input type="email" name="email" id="email" class="form-control" required>
							</div>
							<div class="form-group mb-3 mt-3">
								<input type="tel" name="telefono" id="telefono" class="form-control" required>
							</div>
							<div class="form-group mb-3 mt-3 d-grid gap-2">
								<button type="submit" name="update" id="update"   class="btn btn-primary fas fa-edit ps-2 pe-2">&nbsp;Modifier un client&nbsp;</button>
							</div>
						</form>
					</div>

					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-danger ps-2 pe-2 fas fa-sign-out-alt" data-bs-dismiss="modal">&nbsp;Sortir</button>
					</div>

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
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.js"></script>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script type="text/javascript" src="action.js"></script>
	</body>
	</html>
