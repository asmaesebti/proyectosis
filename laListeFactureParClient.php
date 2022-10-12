<?php 

session_start();
require_once('conexion.php');

mysqli_query($connection,"SET CHARACTER SET 'utf8'");
mysqli_query($connection,"SET SESSION collation_connection ='utf8_unicode_ci'");

// $consultar = "select * from proyectosis";
// $query = mysqli_query($connection, $consultar);
// $array = mysqli_fetch_array($query);

$recu = $_GET['recu'];
$client = $_GET['client'];
$prenom = $_GET['prenom'];
$address = $_GET['address'];

if (!isset($_GET['recu'])) {
	$recu_sesion = null;

}else{
	$recu = $_GET['recu'];
	$_SESSION['recu'] = $recu;

}

if (!isset($_GET['client'])) {
	$client_sesion = null;

}else{
	$client = $_GET['client'];
	$_SESSION['client'] = $client;
	
}
if (!isset($_GET['prenom'])) {
	$prenom_sesion = null;

}else{
	$prenom = $_GET['prenom'];
	$_SESSION['prenom'] = $prenom;
	
}
if (!isset($_GET['address'])) {
	$address_sesion = null;

}else{
	$address = $_GET['address'];
	$_SESSION['address'] = $address;
	
}


$consultarClient = "SELECT * FROM proyectosis WHERE assure like '$client' and prenom like '$prenom' ";
$queryClient = mysqli_query($connection, $consultarClient);
$arrayClient = mysqli_fetch_array($queryClient);
$rowcount=mysqli_num_rows($queryClient);

//	echo $array["recu"];
//https://medium.com/@ramamity94/creating-customisable-beautiful-pdfs-using-jspdf-api-aem-and-angular-991dcc988bbd

?>
<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->
<head>
	<meta charset="utf8" />
	<meta http-equiv="content-type" content="application/vnd.ms-excel; charset=UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<title>Proyecto SIS</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" type="text/css"/>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css"/>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.css"/>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="laListe.css">
	<script src="" type="text/javascript"></script>
	
	<!-- SELECT * FROM `proyectosis` WHERE assure like '%ddd%' and prenom like '%ddd%' -->

</head>
<body class="fondo" style="background-color: beige;">

	<?php
	if(isset($_GET['mensaje']) == 'ok') {
		?>
		<script type="text/javascript">
			$(document).ready(function() {
				swal({
					title: '<?php echo $_GET['respuesta']; ?>',
					text: '<?php echo $_GET['respuesta']; ?>',
					type: 'success'
				});
			});
		</script>
		<?php
	}
	?>

	<header class="container">
		<img src="logo.png" width="100%" alt="">
	</header>
	
	<div class="container-fluid conjunto">
		<div class="row">
			<div class="col">
				<h1 class= ""> </h1>
				<section>

					<!-- Example single danger button -->
					<?php 

					

					// $consultarClient = "SELECT recu, assure, prenom FROM `proyectosis`";
					// $queryClient = mysqli_query($connection, $consultarClient);
					// $arrayClient = mysqli_fetch_array($queryClient);

// href="generarFacturebyRecu.php?recu=<?php echo $row['recu'];

					?>
					<div class="btn-group m-3">
					<!-- 	<button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
							Selectionner un client pour imprimer ses factures
						</button>
						<ul class="dropdown-menu">
							<?php foreach ($queryClient as $row) { ?>
								<li><a class="dropdown-item cliente" id=""  target="_blank" href="generarFacturebyClient.php?client=<?php echo $row['assure']; ?>"><?php echo $row['assure'] . " " . $row['prenom']; ?></a></li>

							<?php } ?>
						</ul> 
						<label for="le_client" class="btn btn-primary ms-3" id="mostrar_cliente"></label> -->
					<!-- 	<script>
							var btn = document.getElementsByClassName('cliente');
							for (var i = 0; i < btn.length; i++) {
								btn[i].addEventListener("click", function() {
									document.getElementById("mostrar_cliente").innerHTML = "Le client seleccioner est : " + this.innerHTML;
								});
							}
						</script> -->

						
					<!-- 	<button type="button" class="btn btn-primary dropdown-toggle ms-5 me-5" data-bs-toggle="dropdown" aria-expanded="false" target="_blank" href="">
							Imprimer toutes les factures par client
						</button> -->

					<!-- 	<label for="le_client" class="btn btn-primary me-3">Selectionner un client pour imprimer ses factures :</label>

						<select name="le_client" id="le_client">
							<option value="" >Selectionner un client</option>
							<?php foreach ($queryClient as $row) { ?>
								<option value="<?php echo $row['assure']; ?>" ><?php echo $row['assure'] . " " . $row['prenom']; ?></option>
							<?php } ?>
						</select> -->
					</div>


				</section>
				<div>
					<label for="le_client" class="btn btn-primary me-3"><?php echo utf8_decode('Rabat, le : '.date("d/m/Y")); ?></label>
					<div>

						<label for="le_client" class="btn btn-primary me-3 mt-3"><?php echo utf8_decode($client) . " " . utf8_decode($_GET["prenom"]); ?></label>

					</div>
					<div>

						<label for="le_client" class="btn btn-primary me-3 mt-3"><?php echo  utf8_decode($_GET["address"]); ?></label>

					</div>
					<h2 class= "" style="text-align: center; color: red; "><u> <?php echo utf8_decode("FACTURE"); ?></u></h2>
					
					<button id="btnExport" onclick="exportToExcel('laLista')">EXPORT REPORT</button>
					<button id="btnExport" onclick="fnExcelReport('laLista');"> EXPORT </button>
					<button class="btn btn-danger me-3 mt-3 mb-3" onclick="exportTableToExcel('laLista', 'members-data')">Export Table Data To Excel File</button>
					<button class="btn btn-secondary me-3 mt-3 mb-3" id="button">Eliminer la ligne seleccioner</button>
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
					<div class="row mt-3 ">
						<div class="col-2">
							<a class="btn btn-warning" href="index.php" role="button">Retourner au formulaire</a>
						</div>
				<!-- 	<div class="col-2">
						<a class="btn btn-success" href="form_date.php" role="button">La liste par date</a>
					</div> -->
					<div class="col-2">
						<a class="btn btn-danger" href="laListeExcelFactureParClient.php?id=<?php echo $_GET['recu']; ?>" role="button">La liste en excel</a>
					</div>
				<!-- 	<div class="col-2">
						<a class="btn btn-primary" href="copiaSeguridad.php" role="button">Sauvegarde de securité de la base de données</a>
					</div> -->
					<!-- <div class="col-2">
						<a class="btn btn-success" href="diagram.php"  role="button">Diagram du montant</a>
					</div> -->

					<div class="col-1 ">
						<a class="btn btn-success" href="index.php" role="button">Salir</a>
					</div>
					<!-- <div class="col-1">
						<a class="btn btn-danger" href="laListeExcelElimines.php" role="button">La liste des eliminés</a>
					</div> -->
				</div>
			</div>
		</div>
	</div>
	<footer class="container text-center mt-3">
		<div class="bord">
			Intermédiaire d’assurances régi par la loi N° 17-99 portant Code des Assurances - N° Agrément : A 19184541200881001 du 22/10/2008
		</div>
		<div>
			Angle Avenue de la Résistance et Rue de Paris - Magasin N° 4 - Océan - Rabat 
		</div>
		<div>
			Tél. : 05 37 73 31 31 – Fax : 05 37 73 70 70
		</div>
		<div>
			R.C. : 81798 – Patente : 26330191 – CNSS : 7040306 – I.F. : 34340738 – ICE : 001695528000088
		</div>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
	</script> 
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#le_client').change(function() {
				$.ajax({
					type: 'GET',
					url: 'generarFacturebyClient.php',
					data: {
						itemID: $(this).val()
					},
					dataType: 'json',
					success: function(data) {
                // do whatever here
                alert(data);
                console.log(data);
            }
        });
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready( function () {
			jQuery.fn.dataTable.Api.register( 'sum()', function ( ) {
				return this.flatten().reduce( function ( a, b ) {
					if ( typeof a === 'string' ) {
						a = a.replace(/[^\d.-]/g, '') * 1;
					}
					if ( typeof b === 'string' ) {
						b = b.replace(/[^\d.-]/g, '') * 1;
					}
					return a + b;
				}, 0);
			});
			var table = $('#laLista').DataTable(
			{
				dom: 'Bfrtip',
				buttons: [
				{ extend: 'csv', className: 'btn btn-success' },
				{ extend: 'excel', className: 'btn btn-warning' },
				{ extend: 'pdf', className: 'btn btn-danger' },
				{
					extend: 'print',
					text: 'Imprimer toute la liste Print all (not just selected)',
					exportOptions: {
						modifier: {
							selected: null
						}
					}
					, className: 'btn btn-success'
				}
				],
				select: true,

				drawCallback: function () {
					var api = this.api();
					var total = api.column( 3, {"filter":"applied"}).data().sum();
					$('#monto').html(total.toFixed(2));
					var total1 = api.column( 4, {"filter":"applied"}).data().sum();
					$('#monto1').html(total1.toFixed(2));
					var total2 = api.column( 5, {"filter":"applied"}).data().sum();
					$('#monto2').html(total2.toFixed(2));
					var total3 = api.column( 6, {"filter":"applied"}).data().sum();
					$('#monto3').html(total3.toFixed(2));
					var total4 = api.column( 7, {"filter":"applied"}).data().sum();
					$('#monto4').html(total4.toFixed(2));

				}
			});

		} );
	</script>

	<script>
		//este codigo crear la tabla pero los datos de la suma no se muestran
		//var doc = new jsPDF('l', 'pt', 'a4');
		//var res = doc.autoTableHtmlToJson(document.getElementById("#laLista"), true);
		//doc.autoTable({html:"#laLista"}); 

		// doc.autoTable(res.columns, res.data, {
		//     startY: 60,
		//     tableWidth: 'auto',
		//     columnWidth: 'auto',
		//     styles: {
		//       overflow: 'linebreak'
		//     }
		//   });

		//doc.save('mipdf.pdf');


	</script>

	<script>
		$(document).ready(function () {
			var table = $('#laLista').DataTable();

			$('#laLista tbody').on('click', 'tr', function () {
				if ($(this).hasClass('selected')) {
					$(this).removeClass('selected');
				} else {
					table.$('tr.selected').removeClass('selected');
					$(this).addClass('selected');
				}
			});

			$('#button').click(function () {
				table.row('.selected').remove().draw(false);
			});
		});
	</script>
<script>
	function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}
</script>
<script>	

function fnExcelReport(tableID)
{
    var tab_text="<table border='2px'><tr bgcolor='#87AFC6'>";
    var textRange; var j=0;
    tab = document.getElementById(tableID); // id of table

    for(j = 0 ; j < tab.rows.length ; j++) 
    {     
        tab_text=tab_text+tab.rows[j].innerHTML+"</tr>";
        //tab_text=tab_text+"</tr>";
    }

    tab_text=tab_text+"</table>";
    tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, "");//remove if u want links in your table
    tab_text= tab_text.replace(/<img[^>]*>/gi,""); // remove if u want images in your table
    tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params

    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE "); 

    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
    {
        txtArea1.document.open("txt/html","replace");
        txtArea1.document.write(tab_text);
        txtArea1.document.close();
        txtArea1.focus(); 
        sa=txtArea1.document.execCommand("SaveAs",true,"Say Thanks to Sumit.xls");
    }  
    else                 //other browser not tested on IE 11
        sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));  

    return (sa);
}

</script>
<script>	

	var tab = document.getElementById('laLista'); 
function exportToExcel(){
var htmls = "";
            var uri = 'data:application/vnd.ms-excel;base64,';
            var template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><meta http-equiv="content-type" content="application/vnd.ms-excel; charset=UTF-8"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'; 
            var base64 = function(s) {
                return window.btoa(unescape(encodeURIComponent(s)))
            };

            var format = function(s, c) {
                return s.replace(/{(\w+)}/g, function(m, p) {
                    return c[p];
                })
            };

            htmls = tab.innerHTML;
            

            var ctx = {
                worksheet : 'Worksheet',
                table : htmls
            }


            var link = document.createElement("a");
            link.download = "export.xls";
            link.href = uri + base64(format(template, ctx));
            link.click();
}

</script>


</body>
</html>
<?php 

unset($_SESSION['date_versement']);

?>