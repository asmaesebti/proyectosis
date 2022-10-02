<?php //pruebaJspdf_2.php ?>

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
    <!-- https://evilnapsis.com/2018/03/19/crear-un-pdf-con-jspdf-php-y-mysql/ -->

</head>
<body>
<button onclick="generate()">Generate PDF</button>
<script src="https://unpkg.com/jspdf@1.5.3/dist/jspdf.min.js"></script>
<script src="https://unpkg.com/jspdf-autotable@3.4.1/dist/jspdf.plugin.autotable.js"></script>

	<script >
   function generate() {
  var doc = new jsPDF();

  var data = [
    {name: "Bar", amount: 1200}, 
    {name: "Zap", amount: 200}, 
    {name: "Foo", amount: 320}];
    
  var total = data.reduce((sum, el) => sum + el.amount, 0);

  var body = [...data.map(el => [el.name, el.amount]), 
    [{content: `Total = ${total}`, colSpan: 2, 
      styles: { fillColor: [239, 154, 154] }
    }]]

  doc.autoTable({
    head: [['Concept', 'Amount']],
    body: body
  });

  doc.save("table.pdf");
}
</script>
</body>
</html>