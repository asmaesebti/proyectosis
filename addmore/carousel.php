<?php 

require("subir.php");
$sql = "SELECT count(*) FROM caroussel_slider";
$resultado = $conn->query($sql);
//echo $resultado->rowCount();
// foreach ($result as $row) {
// 	echo $row['ruta-imagen'];
// }

?>
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

	<!-- https://www.youtube.com/watch?v=sxGgbUzARGo&list=PL6u82dzQtlfsIELw-DRWIl4EG1O9ATmo8&index=3 -->

	<title>CRUD MYSQL PDO POO AJAX ADDMORE CAROUSSEL</title>
</head>
<body class="bg-faded">
	<div class="container">
		<div class="row m-4">
			<div class="col-lg-12 m-auto">
				<h2 class="text-center p-3 bg-warning text-success">Dynamic caroussel</h2>
			</div>
			<div class="container">
				<div class="row justify-content-center mb-2">
					<div class="col">
						<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
							<div class="carousel-indicators">

								<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="Slide 1" aria-current="true" aria-label="Slide 1"></button>
								<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
								<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
							</div>

							<div class="carousel-inner">
								<?php if ($resultado = $conn->query($sql)) {

									/* Comprobar el número de filas que coinciden con la sentencia SELECT */
									if ($resultado->fetchColumn() > 0) {

										/* Ejecutar la sentencia SELECT real y trabajar con los resultados */
										$sql = "SELECT `ruta-imagen` FROM caroussel_slider ";
										foreach ($conn->query($sql) as $fila) {
											//echo  $fila['ruta-imagen'] ;

								?>
								<div class="carousel-item active">
									<img src="<?php echo $fila['ruta-imagen']; ?>" class="d-block w-100" alt="...">
									<div class="carousel-caption d-none d-md-block">
										<h5>First slide label</h5>
										<p>Some representative placeholder content for the first slide.</p>
									</div>
								</div>
						
							<?php  
							}
									}
									/* No coincide ningua fila -- hacer algo en consecuencia */
									else {
										print "Ninguna fila coincide con la consulta.";
									}
						} ?>
								<!-- <div class="carousel-item">
									<img src="..." class="d-block w-100" alt="...">
									<div class="carousel-caption d-none d-md-block">
										<h5>Second slide label</h5>
										<p>Some representative placeholder content for the second slide.</p>
									</div>
								</div>
								<div class="carousel-item">
									<img src="..." class="d-block w-100" alt="...">
									<div class="carousel-caption d-none d-md-block">
										<h5>Third slide label</h5>
										<p>Some representative placeholder content for the third slide.</p>
									</div>
								</div> -->

							</div>
							
							<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
							</button>
							<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 rounded p-4">
					<h4 class="text-center text-primary p-1">Seleccionar imagen para subir</h4>
					<form action="subir.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<input type="file" name="imagen" class="form-control p-1">
						</div>
						<div class="form-group">
							<input type="submit" name="upload" class="btn btn-success mt-3 d-block" value="Subir Imagen">
						</div>
						<div class="form-group">
							<?php if(isset($_SESSION['$msg'])) {

								$msg = $_SESSION['$msg'] ;

							} else{
								$msg = " ";
							}

							?>
							<h5> <?php echo $msg;   ?></h5>
							<?php session_unset();   ?>

						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>