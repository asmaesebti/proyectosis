<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="chart.css">
	
	<script type="text/javascript" src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
	<script type="text/javascript" src="https://assets.codepen.io/16327/Flip.min.js"></script>
	


	<title>am charts</title>
    <style>
        body{
            background-color: #30303d;
            color: #fff;
        }
#chartdiv {
  width: 100%;
  height: 500px;
}
</style>
</head>
<body>

<div id="chartdiv"></div>

<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/dark.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

<!-- Chart code -->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
am4core.useTheme(am4themes_dark);
// Themes end

// Create chart instance
var chart = am4core.create("chartdiv", am4charts.PieChart);

// Add data
// chart.data = [ {
//   "country": "Lithuania",
//   "litres": 501.9
// }, {
//   "country": "Czechia",
//   "litres": 301.9
// }, {
//   "country": "Ireland",
//   "litres": 201.1
// }, {
//   "country": "Germany",
//   "litres": 165.8
// }, {
//   "country": "Australia",
//   "litres": 139.9
// }, {
//   "country": "Austria",
//   "litres": 128.3
// }, {
//   "country": "UK",
//   "litres": 99
// }, {
//   "country": "Belgium",
//   "litres": 60
// }, {
//   "country": "The Netherlands",
//   "litres": 50
// } ];

let url = 'http://localhost/PROYECTOsIS/chart/apirest_php/articulos.php';
let url1 = 'https://jsonplaceholder.typicode.com/todos';

fetch(url)
    .then(response => response.json())
    .then(datos => mostrar(datos))
    .catch(error => console.log(error))

const mostrar = (articulos) => {articulos.forEach(element => {
    chart.data.push(element.descripcion)
  
});
chart.data = articulos;
   console.log(chart.data);
}

chart.innerRadius = am4core.percent(50);

// Add and configure Series
var pieSeries = chart.series.push(new am4charts.PieSeries());
pieSeries.dataFields.value = "stock";
pieSeries.dataFields.category = "descripcion";
pieSeries.slices.template.stroke = am4core.color("#fff");
pieSeries.slices.template.strokeWidth = 2;
pieSeries.slices.template.strokeOpacity = 1;

// This creates initial animation
pieSeries.hiddenState.properties.opacity = 1;
pieSeries.hiddenState.properties.endAngle = -90;
pieSeries.hiddenState.properties.startAngle = -90;

}); // end am4core.ready()


</script>



</body>
</html>