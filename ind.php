<?php 
session_start();
require_once('conexion.php');

mysqli_query($connection,"SET CHARACTER SET 'utf8'");
mysqli_query($connection,"SET SESSION collation_connection ='utf8_unicode_ci'");

$consultarClient = "SELECT * FROM proyectosis WHERE assure like 'ddd' and prenom like 'ddd' ";
$queryClient = mysqli_query($connection, $consultarClient);
$arrayClient = mysqli_fetch_array($queryClient);
$rowcount=mysqli_num_rows($queryClient);


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css"/>
	<link href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="styleInd.css">
	<title></title>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col">
			<table class="table table-striped" id="excel">
    <thead>
      <tr>
        <th scope="col">N° Police</th>
        <th scope="col">Période</th>
        <th scope="col">Désignation</th>
        <th scope="col">Prime Nette</th>
        <th scope="col">Taxes</th>
        <th scope="col">T.P</th>
        <th scope="col">ACCESOIRES</th>
        <th scope="col">Total TTC</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      foreach ($queryClient as $row) {
        ?>
        <tr>
          <td><?php echo utf8_decode($row['police']); ?></td>
          <th scope="row"><?php echo utf8_decode($row["du"] . " AU " . $row["au"]); ?></th>
          <td><?php echo utf8_decode($row["designation"]); ?></td>
          <td><?php echo utf8_decode($row["prime_net"]); ?></td>
          <td><?php echo utf8_decode($row["taxes"]); ?></td>
          <td><?php echo utf8_decode($row["tp"]); ?></td>
          <td><?php echo utf8_decode($row["accesoires"]); ?></td>
          <td><?php echo utf8_decode($row["totale"]); ?></td>
        </tr>
      <?php } ?>

    </tbody>
    <tfoot>


      <td class="bg-teals-active color-palette text-center">
        <strong></strong>
      </td>
      <td class="bg-teals-active color-palette text-center">
        <strong></strong>
      </td>

      <td class="bg-teals-active color-palette text-center">
        <strong><b>Total </b></strong>
      </td>
      <td class="bg-teals-active color-palette text-center">
        <strong id="monto">0</strong>
      </td>
      <td class="bg-teals-active color-palette text-center">
        <strong id="monto1">0</strong>
      </td>
      <td class="bg-teals-active color-palette text-center">
        <strong id="monto2">0</strong>
      </td>
      <td class="bg-teals-active color-palette text-center">
        <strong id="monto3">0</strong>
      </td>
      <td class="bg-teals-active color-palette text-center">
        <strong id="monto4">0</strong>
      </td>
    </tfoot>
  </table>
		</div>
	</div>
</div>
<button class="btn btn-outline-success">prueba</button>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="dataTables.bootstrap5.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/datatables-buttons-excel-styles@1.2.0/js/buttons.html5.styles.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/datatables-buttons-excel-styles@1.2.0/js/buttons.html5.styles.templates.min.js"></script>


<script>
	$(document).ready(function(){
		$('#excel').DataTable({
			dom: "Bfrtip",
			buttons:{
				dom:{
					buttons:{
						className: 'btn'
					}
				},
				buttons:[
					{
						extend:"excel",
						text:"Exportar a Excel",
						className: 'btn btn-outline-success',
						excelStyles:{
							"template":[
								"blue_medium", "header_blue", "title_medium"
							],
							cells:"2",
							style:{
								font:{
									name:'Arial',
									size:"16",
									color:'FFFFFF',
									b:true
								},
								fill:{
									pattern:{
										color:'ff7961'
									}
								}
							},
							cells: 'sD',
							condition:{
								type:'cellIs',
								operator: 'between',
								formula: [35,50]
							},
							style:{
								font:{
									b:true
								},
								fill:{
									pattern:{
										bgColor: 'e8f401'
									}
								}
							}
							
						},
						insertCells:[
							{
								cells: 'sCh',
								content: 'Nueva columna C',
								pushCol: true
							},
							{
								cells: 'sC1:C-0',
								content: 'C',
								pushCol: true
							},
							{
								cells:'s2:4',
								content: ' Celdas nuevas',
								pushRow: true
							},
							{
								cells:'B3',
								content:'Esta celda es la B3',
							},
							{
								cells:'B6',
								content:'Esta celda es la B3',
							}
						]
					}
				]
			}
		});
	})
</script>
</body>
</html>