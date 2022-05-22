<?php 

require("subir.php");

$result = $conn->query("SELECT `ruta-imagen` FROM caroussel_slider");


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
						<!-- Carousel -->
						<div id="demo" class="carousel slide" data-bs-ride="carousel">

							<!-- Indicators/dots -->
							<div class="carousel-indicators">
								<?php 

								$i = 0;
								foreach ($result as $row) {
									$actives = '';
									if ($i == 0) {
										$actives = "active";
									}
									

									?>
									<button type="button" data-bs-target="#demo" data-bs-slide-to="<?php echo $i; ?>" class="<?php echo $actives; ?>"></button>
									<?php $i++; } ?>
								</div>

								<!-- The slideshow/carousel -->
								<div class="carousel-inner">
									<?php 

									$i = 0;
									foreach ($result as $row) {
										$actives = '';
										if ($i == 0) {
											$actives = "active";
										}


										?>
										<div class="carousel-item <?php echo $actives; ?>">
											<img src="<?php echo $row['ruta-imagen']; ?>" width="100%" height="400" >
										</div>
										<?php $i++; } ?>
									</div>

									<!-- Left and right controls/icons -->
									<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
										<span class="carousel-control-prev-icon"></span>
									</button>
									<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
										<span class="carousel-control-next-icon"></span>
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