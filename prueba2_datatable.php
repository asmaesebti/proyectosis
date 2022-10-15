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
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.min.js"></script>
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
        { extend: 'excel',
        customize: function (xlsx) {
          var sheet = xlsx.xl.worksheets['sheet1.xml'];
          var numrows = 22;
          var clR = $('row', sheet);

                //update Row
                clR.each(function () {
                  var attr = $(this).attr('r');
                  var ind = parseInt(attr);
                  ind = ind + numrows;
                  $(this).attr("r",ind);
                });

                // Create row before data
                $('row c ', sheet).each(function () {
                  var attr = $(this).attr('r');
                  var pre = attr.substring(0, 1);
                  var ind = parseInt(attr.substring(1, attr.length));
                  ind = ind + numrows;
                  $(this).attr("r", pre + ind);
                });

                function Addrow(index,data) {
                  msg='<row r="'+index+'">'
                  for(i=0;i<data.length;i++){
                    var key=data[i].key;
                    var value=data[i].value;
                    msg += '<c t="inlineStr" r="' + key + index + '">';
                    msg += '<is>';
                    msg +=  '<t>'+value+'</t>';
                    msg+=  '</is>';
                    msg+='</c>';
                  }
                  msg += '</row>';
                  return msg;
                }

                let tt = Date.now();
                const hoy = new Date(tt);


                //insert
                var r1 = Addrow(1, [{ key: 'A', value: '' }, { key: 'B', value: '' }, { key: 'C', value: '' }]);
                var r2 = Addrow(2, [{ key: 'A', value: '' }, { key: 'B', value: '' }, { key: 'C', value: '' }]);
                var r3 = Addrow(3, [{ key: 'A', value: '' }, { key: 'B', value: '' }, { key: 'C', value: '' }]);
                var r4 = Addrow(4, [{ key: 'A', value: '' }, { key: 'B', value: '' }, { key: 'C', value: '' }]);
                var r5 = Addrow(5, [{ key: 'A', value: '' }, { key: 'B', value: '' }, { key: 'C', value: '' }]);
                var r6 = Addrow(6, [{ key: 'A', value: '' }, { key: 'B', value: '' }, { key: 'C', value: '' }]);
                var r7 = Addrow(7, [{ key: 'A', value: '' }, { key: 'B', value: '' }, { key: 'C', value: '' }]);
                var r8 = Addrow(8, [{ key: 'A', value: '' }, { key: 'B', value: '' }, { key: 'C', value: '' }]);
                var r9 = Addrow(9, [{ key: 'A', value: '' }, { key: 'B', value: '' }, { key: 'C', value: '' }]);
                var r10 = Addrow(10, [{ key: 'A', value: '' }, { key: 'B', value: '' }, { key: 'C', value: '' }]);
                var r11 = Addrow(11, [{ key: 'A', value: '' }, { key: 'B', value: '' }, { key: 'C', value: '' }]);
                var r12 = Addrow(12, [{ key: 'A', value: '' }, { key: 'B', value: '' }, { key: 'C', value: '' }]);
                var r13 = Addrow(13, [{ key: 'A', value: '' }, { key: 'B', value: '' }, { key: 'C', value: '' }]);
                var r14 = Addrow(14, [{ key: 'A', value: '' }, { key: 'B', value: 'Rabat, le :' }, { key: 'C', value: hoy.toLocaleDateString() }]);
                var r15 = Addrow(15, [{ key: 'A', value: '' }, { key: 'B', value: '' }, { key: 'C', value: '' }]);
                var r16 = Addrow(16, [{ key: 'A', value: '' }, { key: 'B', value: '' }, { key: 'C', value: '' }]);
                var r17 = Addrow(17, [{ key: 'A', value: '' }, { key: 'B', value: '' }, { key: 'C', value: '' }]);
                var r18 = Addrow(18, [{ key: 'A', value: '' }, { key: 'B', value: '' }, { key: 'C', value: '' }]);
                var r19 = Addrow(19, [{ key: 'A', value: '' }, { key: 'B', value: '' }, { key: 'C', value: '' }]);
                var r20 = Addrow(20, [{ key: 'A', value: '' }, { key: 'B', value: '' }, { key: 'C', value: '' }]);
                var r21 = Addrow(21, [{ key: 'A', value: '' }, { key: 'B', value: '' }, { key: 'C', value: '' }]);
                var r22 = Addrow(22, [{ key: 'A', value: '' }, { key: 'B', value: '' }, { key: 'C', value: '' }]);




                sheet.childNodes[0].childNodes[1].innerHTML = r1 + r2+ r3+ r4+r5+r6+r7+r8+r9+r10+r11+r12+r13+r14+r15+r16+r17+r18+r19+r20+r21+r22+ sheet.childNodes[0].childNodes[1].innerHTML;
              }
              , className: 'btn btn-warning' },
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

</script>

</body>
</html>