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
	<link rel="stylesheet" href="fotoChange.css">
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
			<script id="vertexShader" type="x-shader/x-vertex">
				uniform float uTime;
				uniform float uProgress;
				varying vec2 vUv;
				void main() {
					vUv = uv;
					gl_Position = projectionMatrix * modelViewMatrix * vec4(position, 1.0);
				}
			</script>
			<script id="fragmentShader" type="x-shader/x-fragment">
				uniform float uTime;
				uniform float uProgress;
				uniform vec2 uScreenRes;
				uniform sampler2D uCurrentImage;
				uniform vec2 uCurrentImageRes;
				uniform sampler2D uNextImage;
				uniform vec2 uNextImageRes;
				varying vec2 vUv;
				vec2 getCoverUv (vec2 uv, vec2 resolution, vec2 texResolution) {
					vec2 s = resolution; // Screen
					vec2 i = texResolution; // Image
					float rs = s.x / s.y;
					float ri = i.x / i.y;
					vec2 new = rs < ri ? vec2(i.x * s.y / i.y, s.y) : vec2(s.x, i.y * s.x / i.x);
					vec2 offset = (rs < ri ? vec2((new.x - s.x) / 2.0, 0.0) : vec2(0.0, (new.y - s.y) / 2.0)) / new;
					vec2 coverUv = uv * s / new + offset;
					return coverUv;
				}
				void main() {
					vec2 uv = vUv;
					vec4 currentImage = texture2D(uCurrentImage, getCoverUv(uv, uScreenRes, uCurrentImageRes));
					vec4 nextImage = texture2D(uNextImage, getCoverUv(uv, uScreenRes, uNextImageRes));
					vec4 black = vec4(0,0,0,1);
					vec4 white = vec4(1,1,1,1);
					float p = uProgress;
					// float p = sin(uTime * 5.) * 0.5 + 0.5;
					float d = step(0.05 * ((1. - p) * (uv.x + 1.)), mod(cos(uv.x) + sin(uv.y)*0.8, 0.05));
					// vec4 color = mix(black, white, d);
					vec4 color = mix(currentImage, nextImage, d);
					gl_FragColor = color;
				}
			</script>

			<div class="text">
				<div>Click to change image</div>
				<div>
					<!-- <a href="https://codepen.io/collection/xKqvGb" target="_blank">View collection</a> -->

					hola
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dat-gui/0.7.9/dat.gui.min.js"></script>
<script type="text/javascript" src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
<script type="text/javascript" src="fotoChange.js"></script>


</body>
</html>

