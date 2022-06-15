<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="cards.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	<script type="text/javascript" src="main.js" defer></script>
	<title>cards</title>
</head>
<body>
	<div class="container1">
		<div class="nav-bar">
			<div class="link active">
				<img src="home.svg" alt="">
				<p>Home</p>
			</div>

			<div class="link">
				<img src="heart.svg" alt="">

				<p>Likes</p>
			</div>
			<div class="link">
				<img src="search.svg" alt="">

				<p>Search</p>
			</div>
			<div class="link">
				<img src="profile.svg" alt="">

				<p>Profile</p>
			</div>
		</div>
	</div>

	<div class="datetime">
		<div class="time">10:37 AM</div>
		<div class="date">Jueves 10 enero 2022</div>
	</div>

	<!-- <div class="card1">
		<div class="container"> -->
			<div class="card">
				<img src="image.png" class="profile-img">
				<div class="info">
					<h1>Mayra Jacob</h1>
					<p>I'm a full time web developer.</p>
					<ul>
						<li><img src="location.png" alt="">Seville</li>
						<li><img src="website.png" alt="">mi.com</li>
						<li><img src="instagram.png" alt="">miajsdb</li>
					</ul>
					<div class="links">
						<a href="attestation-auto - 2022-05-27T161247.720.pdf" download><img src="download.png" alt="">DOwnload cv</a>
						<a href="https://wa.me/+34655173174" target="_blank" class="msg-btn">enviar mensaje</a>
					</div>
				</div>
				<img src="share.png" class="share-icon">
			</div>
	<!-- </div>
	</div> -->


	

	<script type="text/javascript" src="vanilla-tilt.js"></script>
	<script type="text/javascript">
		VanillaTilt.init(document.querySelectorAll(".card"), {
			max: 25,
			speed: 400,
			glare: true,
			"max-glare": 1,
		});
	</script>
	<script type="text/javascript">
		let links = document.getElementsByClassName("link");

		function removeactive(){
			for(link of links){
				link.classList.remove("active");
			}
		}

		for(link of links){
			link.onclick = function(){
				removeactive();
				this.classList.add("active");
			}
		}
	</script>
</body>
</html>