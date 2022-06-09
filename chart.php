<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="chart.css">
	
	<script type="text/javascript" src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
	<script type="text/javascript" src="https://assets.codepen.io/16327/Flip.min.js"></script>
		<script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.1.2/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@6.0.1/dist/ionicons.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js" ></script>
  <script type="text/javascript" src="chart.js" defer></script>
	<title></title>
</head>
<body>
<script type="text/javascript">
	var arr = [];
for(var i=1; i<=20; i++) {
   arr.push(Math.floor(Math.random() * 10).toString());
}
	var arrS = [];
for(var i=1; i<=20; i++) {
   arrS.push("color"+i.toString());
}
</script>
<canvas id="myChart" width="400" height="400"></canvas>
<script>

const ctx = document.getElementById('myChart').getContext('2d');

const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: arrS,
        datasets: [{
            label: '# of Votes',
            data: arr,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

</script>

</body>
</html>