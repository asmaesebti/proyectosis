<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="pr.css">
	<title></title>
</head>
<body>
	<div class="menu">
		<div class="toggle"><ion-icon name="add-circle-outline"></ion-icon></div>
		<li style="--i:0;">
			<a href=""><ion-icon name="home-outline"></ion-icon></a>
		</li>
		<li style="--i:1;">
			<a href=""><ion-icon name="person-outline"></ion-icon></a>
		</li>
		<li style="--i:2;">
			<a href=""><ion-icon name="settings-outline"></ion-icon></a>
		</li>
		<li style="--i:3;">
			<a href="https://www.google.com"><ion-icon name="mail-outline"></ion-icon></a>
		</li>
		<li style="--i:4;">
			<a href=""><ion-icon name="key-outline"></ion-icon></a>
		</li>
		<li style="--i:5;">
			<a href=""><ion-icon name="videocam-outline"></ion-icon></a>
		</li>
		<li style="--i:6;">
			<a href=""><ion-icon name="game-controller-outline"></ion-icon></a>
		</li>
		<li style="--i:7;">
			<a href=""><ion-icon name="camera-outline"></ion-icon></a>
		</li>
	</div>


	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<script type="text/javascript">
		console.log(document.plugins.namedItem.length);
		console.log(document.body.previousSibling.childNodes.values.toString.name);
		console.log(document.body);
		console.log(document);

		let toggle = document.querySelector('.toggle');
		let menu = document.querySelector('.menu');
		let li = document.querySelectorAll('li');
		let v = true;

		toggle.onclick = function(){
			menu.classList.toggle('active');
			
			if (v) {
				for (var i = 0; i < li.length; i++) {
					li[i].style.opacity=1;
					v = false;
				}

			}else{
				for (var i = 0; i < li.length; i++) {
					li[i].style.opacity=0;
					v = true;
				}
			}
		}
	</script>
</body>
</html>