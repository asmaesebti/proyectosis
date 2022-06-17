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
	<title>drag</title>
</head>
<?php 
require_once('conexion.php');
$consultar = "select * from tabla_imagenes";
$query = mysqli_query($connection, $consultar);
$array = mysqli_fetch_array($query); 
?>
<body style="background-color: lightyellow;">
	<div class="container mt-2 d-flex justify-content-center align-items-center  w-50 shadow-lg p-3 bg-danger rounded">
		<div class="row">
			<h1 class="mb-5 shadow-lg p-3 bg-warning rounded">drag and save</h1>

		</div>
	</div>
	<div class="container d-flex justify-content-center align-items-center m-3">

		
		<div class="row">
			<div class="col">

				<form enctype="multipart/form-data" method="post" action="cambioImagenPersonal.php">
					<div class="drop-zone">
						<span class="drop-zone__prompt">Drop file here or click to upload</span>
						<input type="file" name="myFile" class="drop-zone__input" required>
					</div>
					<button class="btn btn-success m-5"  type="submit" >Añadir perfil</button>
				</form>

			</div>
			<div class="col">
				
				<table class="demo" id="tabla">
					<caption>Table 1</caption>
					<thead>
						<tr>
							<th>ID</th>
							<th>IMAGEN</th>
							<th>CREADO EL</th>
							<th>CAMBIAR PERFIL</th>
							<th>ELIMINAR PERFIL</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						foreach ($query as $row) {
							?>
							<tr>
								<td><?php echo $row['id']; ?></td>
								<td><img src="uploads/<?php echo $row['imagen']; ?>" style="width: 50px;"></td>
								<td><?php echo $row['creado_el']; ?></td>
								<td><a class="btn btn-warning" href="mostrar_modificar.php?id=<?php echo $row['id']; ?>">modificar</a> </td>
								<td><a class="btn btn-danger" href="eliminar.php?id=<?php echo $row['id']; ?>">eliminar</a></td>
							</tr>
							<?php
						}

						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="drag.js"></script>
	<script type="text/javascript">
		$(document).ready( function () {

			$('#tabla').DataTable({
				columnDefs: [
				{
					targets: '_all',
					className: 'dt-center dt-nowrap ',
					responsive: true,
					searchable: true,
					visible: true
				}
				]
			});

		} );

	</script>
</body>
</html>