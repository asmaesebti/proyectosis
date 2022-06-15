<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="cards.css">
	<title>cards</title>
</head>
<body>
<div class="container">
	<div class="card">
		<div class="content">
			<h2>01</h2>
			<h3>Card one</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit soluta dolorem minima inventore amet odio, vitae rerum harum quas sed consequuntur tempora laborum laudantium, architecto, corrupti, quis eaque illum fugiat!</p>
			<a href="#">Reand More</a>
		</div>
	</div>
	<div class="card">
		<div class="content">
			<h2>02</h2>
			<h3>Card Two</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit soluta dolorem minima inventore amet odio, vitae rerum harum quas sed consequuntur tempora laborum laudantium, architecto, corrupti, quis eaque illum fugiat!</p>
			<a href="#">Reand More</a>
		</div>
	</div>
	<div class="card">
		<div class="content">
			<h2>03</h2>
			<h3>Card Three</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit soluta dolorem minima inventore amet odio, vitae rerum harum quas sed consequuntur tempora laborum laudantium, architecto, corrupti, quis eaque illum fugiat!</p>
			<a href="#">Reand More</a>
		</div>
	</div>
</div>

<script type="text/javascript" src="vanilla-tilt.js"></script>
<script type="text/javascript">
	VanillaTilt.init(document.querySelectorAll(".card"), {
		max: 25,
		speed: 400,
		glare: true,
		"max-glare": 1,
	});
</script>
</body>
</html>