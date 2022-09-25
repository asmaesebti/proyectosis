<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="checkEmail.css">
	<title>check email</title>
</head>
<body>
<div>
	<h3>Email validation check</h3>
	<form action="#" id="form">
		<div class="inputBox">
			<input type="text" id="email" placeholder="Enter email address" onkeyup="validate();">

			<span class="indicator"></span>
		</div>
	</form>
</div>



	<script type="text/javascript">
		function validate(){
			const form = document.getElementById('form');
			const email = document.getElementById('email').value;
			const pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/

			if (email.match(pattern)) {
				form.classList.add('valid');
				form.classList.remove('invalid');
			} else {
				form.classList.add('invalid');
				form.classList.remove('valid');

			}

			if (email == "") {
				form.classList.remove('invalid');
				form.classList.remove('valid');
			}

		}
	</script>

</body>
</html>