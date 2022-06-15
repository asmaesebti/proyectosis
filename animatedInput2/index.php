<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="cards.css">
	<title>cards</title>
</head>
<body>

	<div class="card">
	<div class="container">
		<h2>Our Newsletter</h2>
		<form action="">
			<div class="inputBox">
				<input type="text"  required= "required">
				<span>Full Name</span>
			</div>
			<div class="inputBox">
				<input type="text"  required= "required">
				<span>Full Name</span>
			</div>
			<div class="inputBox">
				<input type="submit"  value= "Subscribe">
			</div>
		</form>
	</div>
	</div>
	

<script type="text/javascript" src="vanilla-tilt.js"></script>
<script type="text/javascript">
	VanillaTilt.init(document.querySelectorAll(".container"), {
		max: 25,
		speed: 400,
		glare: true,
		"max-glare": 1,
	});
</script>
</body>
</html>