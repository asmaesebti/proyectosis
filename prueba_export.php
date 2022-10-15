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

	<title></title>
</head>
<body>
	<table class="table table-hover" id="laLista">
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
			<?php }	?>

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
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/jqc-1.12.4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-colvis-1.6.1/b-html5-1.6.1/b-print-1.6.1/datatables.min.css"/>
  
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/jqc-1.12.4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-colvis-1.6.1/b-html5-1.6.1/b-print-1.6.1/datatables.min.js"></script>
	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/TableExport/3.3.13/css/tableexport.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/blob-polyfill/4.0.20200601/Blob.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.core.min.js" integrity="sha512-UhlYw//T419BPq/emC5xSZzkjjreRfN3426517rfsg/XIEC02ggQBb680V0VvP+zaDZ78zqse3rqnnI5EJ6rxA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.0/FileSaver.js" integrity="sha512-UNbeFrHORGTzMn3HTt00fvdojBYHLPxJbLChmtoyDwB6P9hX5mah3kMKm0HHNx/EvSPJt14b+SlD8xhuZ4w9Lg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/TableExport/3.3.13/js/tableexport.js"></script>
<script type="text/javascript">
    $(function () {
        var tables = $("#laLista").tableExport({
            bootstrap: true,
            headings: true,
            footers: true,
            formats: ["xlsx", "xls", "csv", "txt"],
            fileName: "MyExcel",
            position: "top",
            ignoreRows: null,
            ignoreCols: null,
            ignoreCSS: ".tableexport-ignore",
            emptyCSS: ".tableexport-empty",
            trimWhitespace: true
        });
    });
</script>
	<script>
		
	</script>

</body>
</html>