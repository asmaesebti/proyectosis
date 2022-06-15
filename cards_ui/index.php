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
		<div class="imgBx">
			<img src="mohammed foto dni 21 11 2019(1)(2).jpg">
		</div>
		<div class="content">
			<div class="details">
				<h2>Mohammed sebti<br><span>Senior UX/Java </span></h2>
				<div class="data">
					<h3>342<br><span>Posts</span></h3>
					<h3>120k<br><span>Followers</span></h3>
					<h3>285<br><span>Following</span></h3>
				</div>
				<div class="actionBtn">
					<button>Follow</button>
					<button>Message</button>
				</div>
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