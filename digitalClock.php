<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="digitalClock.css">
	<title>digital clock</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div class="center">
<input type="checkbox" name="" >
</div>

<iframe id="pdf" src="phpejemplo_leer_mas.pdf" frameborder="0"></iframe>

<div id="time">
	<div class="circle" style="--clr:#ff2972">
		<div class="dots hr_dot"></div>
		<svg>
			<circle cx="70" cy="70" r="70"></circle>
			<circle cx="70" cy="70" r="70" id="hh"></circle>
		</svg>
		<div id="hours">00</div>
	</div>
	<div class="circle" style="--clr:#fee800">
		<div class="dots min_dot"></div>
		<svg>
			<circle cx="70" cy="70" r="70"></circle>
			<circle cx="70" cy="70" r="70" id="mm"></circle>
		</svg>
		<div id="minutes">00</div>
	</div>
	<div class="circle" style="--clr:#04fc43">
		<div class="dots sec_dot"></div>
		<svg>
			<circle cx="70" cy="70" r="70"></circle>
			<circle cx="70" cy="70" r="70" id="ss"></circle>
		</svg>
		<div id="seconds">00</div>
	</div>
	<div class="ap">
		<div id="ampm">AM</div>
	</div>
</div>

<div class="circle1">
	<i class="fas fa-arrow-up"></i>
</div>


<div class="circle2">
	<ul>
	<li style="--i:-4;"><span>m</span></li>
	<li style="--i:-3;"><span>m</span></li>
	<li style="--i:-2;"><span>m</span></li>
	<li style="--i:-1;"><span>m</span></li>
	<li style="--i:0;"><span>m</span></li>
	<li style="--i:1;"><span>m</span></li>
	<li style="--i:2;"><span>m</span></li>
	<li style="--i:3;"><span>m</span></li>
	<li style="--i:4;"><span>m</span></li>
	<li style="--i:5;"><span>m</span></li>
	<li style="--i:6;"><span>m</span></li>
	<li style="--i:7;"><span>m</span></li>
	<li style="--i:8;"><span>m</span></li>
	<li style="--i:9;"><span>m</span></li>
	<li style="--i:10;"><span>m</span></li>
	<li style="--i:11;"><span>m</span></li>
	<li style="--i:12;"><span>m</span></li>
	</ul>
</div>



<a href="#" class="elboton">
	<span></span>
	<span></span>
	<span></span>
	<span></span>
	Neon Button
</a>

<a href="#" class="elboton1">
	<span></span>
	<span></span>
	<span></span>
	<span></span>
	Neon Button
</a>
<a href="#" class="elboton1">
	<span></span>
	<span></span>
	<span></span>
	<span></span>
	Neon Button
</a>

<a href="#" class="elboton1">
	<span></span>
	<span></span>
	<span></span>
	<span></span>
	Neon Button
</a>




	<script type="text/javascript">

		setInterval(() => {


		let hours = document.getElementById('hours');
		let minutes = document.getElementById('minutes');
		let seconds = document.getElementById('seconds');
		let ampm = document.getElementById('ampm');

		let hh = document.getElementById('hh');
		let mm = document.getElementById('mm');
		let ss = document.getElementById('ss');

		let hr_dot = document.querySelector('.hr_dot');
		let min_dot = document.querySelector('.min_dot');
		let sec_dot = document.querySelector('.sec_dot');



		let h = new Date().getHours();
		let m = new Date().getMinutes();
		let s = new Date().getSeconds();
		let am = h >= 12 ? "PM" : "AM";

		if (h > 12) {
			h = h-12;
		}

		if (h < 10) {
			h = "0" + h;
		}

		m = (m<10) ? "0" + m : m;
		s = (s<10) ? "0" + s : s;

		hours.innerHTML = h + "<br><span>Hours</span>";
		minutes.innerHTML = m + "<br><span>Minutes</span>";;
		seconds.innerHTML = s + "<br><span>Seconds</span>";;
		ampm.innerHTML = am;

		hh.style.strokeDashoffset = 440- (400*h) / 12;
		mm.style.strokeDashoffset = 440- (400*m) / 60;
		ss.style.strokeDashoffset = 440- (400*s) / 60;

		hr_dot.style.transform = `rotate(${h*30}deg)`;
		min_dot.style.transform = `rotate(${m*6}deg)`;
		sec_dot.style.transform = `rotate(${s*6}deg)`;

});

	</script>

</body>
</html>