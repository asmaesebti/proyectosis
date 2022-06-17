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
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.css"/>
	<link rel="stylesheet" href="drag.css">
	<title>mostrar modificar</title>
</head>
<?php 
require_once('conexion.php');
session_start();

if (!isset($_GET['id'])) {
	
		$id = "";
	}else{
		$id = $_GET['id'] ;
		$_SESSION['id'] = $_GET['id'] ;
		// echo $_SESSION['id'] ;

	}

$result = mysqli_query($connection , "SELECT * FROM tabla_imagenes where id = '$id'"); 
while ($row=mysqli_fetch_array($result)) 
{ 

?>
<body>
	<div class="container mt-2 d-flex justify-content-center align-items-center  w-50 shadow-lg p-3 bg-info rounded">
		<div class="row">
			<h1 class="mb-5">drag and save</h1>

		</div>
	</div>
	<div class="container">


		<form enctype="multipart/form-data" method="post" action="modificar.php">
			<div class="row">
				<div class="col">
					<div class="mb-3">
						<label for="validationServer01" class="form-label">ID</label>
						<input type="text" class="form-control is-valid" id="validationServer01" value="<?php echo $row["id"]; ?>" readonly>
						<div class="valid-feedback">
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="drop-zone">
						<span class="drop-zone__prompt">Drop file here or click to upload</span>
						<input type="file" name="myFile" class="drop-zone__input" required>
					</div>
				</div>
				<div class="col">
					<img style="width: 300px; height: auto" src="uploads/<?php echo $row["imagen"]; ?>"  alt="..." >
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="mb-3">
						<label for="validationServer01" class="form-label">Email</label>
						<input type="text" class="form-control is-valid" id="validationServer01" value="<?php echo $row["creado_el"]; ?>" readonly>
						<div class="valid-feedback">
						</div>
					</div>
				</div>
			</div>

			<button class="btn btn-success m-5"  type="submit" >Actualizar perfil</button>
		</form>

	
	</div>
<?php }  ?>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="drag.js"></script>
</body>
</html>