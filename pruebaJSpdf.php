 <?php

 require_once('conexion.php');

 $con  = new mysqli("localhost","root","","proyectosis");
 $sql = "SELECT * FROM proyectosis WHERE assure like 'ddd'";
 $query = $con->query($sql);
 $data = array();
 while($r=$query->fetch_object()){
  $data[] =$r;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Hello world</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- https://evilnapsis.com/2018/03/19/crear-un-pdf-con-jspdf-php-y-mysql/
    https://codingshiksha.com/javascript/jspdf-autotable-example-to-add-text-before-after-tables-in-pdf-document-full-tutorial-for-beginners/
-->

</head>
<body>
    <!-- <h1>Hello world</h1>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>
    <script type="text/javascript">
        var pdf = new jsPDF('p', 'mm', 'a4');
        // pdf.text(30, 30, 'Hello world!');

        // pdf.setFontSize(20);
        // pdf.setFont("times");
        // pdf.setFontType("bold");
        // pdf.setTextColor(255, 0, 0);
        // pdf.text(10,10, 'This is a 20pt Times Bold red string');

        // pdf.save('hello_world.pdf');
    </script>
</body>
</html> -->

<div class="container">

    <div class="row">
        <div class="col-md-12">

            <h1>Ejemplo de jsPDF #3</h1>
            <br>
            <p>En este ejemplo usamos tablas con AutoTable, PHP y MySQL.</p>
            <button id="generar" class="btn btn-success">Generar PDF</button>
            <br>
            <br>

        </div>

    </div>

</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.min.js"></script>
<script>
    $("#generar").click(function(){
      var pdf = new jsPDF();
      pdf.text(20,10,"Mostrando una Tabla con JsPDF y el Plugin AutoTable");

      var columns = ["N° Police", "Période", "Désignation", "Prime Nette","Taxes", "T.P","ACCESOIRES","Total TTC"];
      var data = [
      <?php foreach($data as $d){ ?>
          ["<?php echo $d->police; ?>", "<?php echo $d->du . ' au ' . $d->au ; ?>", "<?php echo $d->designation; ?>", "<?php echo $d->prime_net; ?>","<?php echo $d->taxes; ?>","<?php echo $d->tp; ?>","<?php echo $d->accesoires; ?>","<?php echo $d->totale; ?>"],
      <?php } ?>
      ];

      var total = data.reduce((sum, el) => sum + el.prime_net, 0);

      var body = [...data.map(el => [el.prime_net, el.taxes]), 
      [{content: `Total = ${total}`, colSpan: 8, 
      styles: { fillColor: [239, 154, 154] }
  }]];

//   pdf.autoTable({
//     head: [columns],
//     body: data
// });

      pdf.autoTable(columns,data,
        { margin:{ top: 25  },
        styles: { overflow: "linebreak" },
        bodyStyles: { valign: "top" },
        columnStyles: { police: { columnWidth: "wrap" } },
        theme: "striped",
        showHead: "everyPage",

        didDrawPage: function (data) {

        // Header
        pdf.setFontSize(20);
        pdf.setTextColor(40);
        pdf.text("Report", data.settings.margin.left, 22);

        // Footer
        var str = "Page " + pdf.internal.getNumberOfPages();

        pdf.setFontSize(10);

        // jsPDF 1.4+ uses getWidth, <1.4 uses .width
        var pageSize = pdf.internal.pageSize;
        var pageHeight = pageSize.height
        ? pageSize.height
        : pageSize.getHeight();
        pdf.text(str, data.settings.margin.left, pageHeight - 10);
    }
}
);

pdf.save('mipdf.pdf');

});
</script>
</body>
</html>