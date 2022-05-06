<?php

require_once('conexion.php');

// query
$consultar = "select * from proyectosis ORDER BY `totale` DESC";
$query = mysqli_query($connection, $consultar);
$array = mysqli_fetch_array($query);

// /$query = "SELECT Desired_column FROM Table_Name";
// $results = mysqli_query($sql, $query);

$rows = [];

while($row = mysqli_fetch_assoc($query)) {
    $rows[] = $row;
    echo $row['totale'] . " " ;
// var_dump($row['totale']);
}
 // var_dump($rows);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/cylinder.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<figure class="highcharts-figure">
  <div id="container"></div>
  <p class="highcharts-description">
    Chart showing basic use of 3D cylindrical columns. A 3D cylinder chart
    is similar to a 3D column chart, with a different shape.
  </p>
</figure>
</body>
</html>