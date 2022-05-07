<?php

require_once('conexion.php');

// query
$consultar = "select * from proyectosis ORDER BY `totale` DESC";
$query = mysqli_query($connection, $consultar);
//$array = mysqli_fetch_array($query);

$rows = [];

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" type="text/css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="diagram.css">
    
    <title>Proyecto SIS</title>
    <script>
        etiquetas = [
        <?php foreach ($query as $rowDep) { ?>
            '<?php  echo $rowDep['assure'] ?>',
        <?php } ?>
        
        ];
        valores = [
        
        <?php foreach ($query as $rowDep) { ?>
            <?php  echo $rowDep['totale'] ?>,

        <?php } ?>   

        ];
    </script>
    
</head>
<body class="container fondo">
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>
    <script src="https://code.highcharts.com/modules/cylinder.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <header class="container">
        <img src="logo.png" width="100%" alt="">
    </header>

    <figure class="highcharts-figure">
      <div id="container"></div>
      <p class="highcharts-description">
        Chart showing basic use of 3D cylindrical columns. A 3D cylinder chart
        is similar to a 3D column chart, with a different shapeddd.
    </p>
</figure>
<div class="col d-flex justify-content-center align-content-center mb-4">
    <a class="btn btn-success" href="laListe.php" role="button">Retour a la liste principal</a>
</div>
<footer class="container text-center">
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
<script src="diagram.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
</script> 
</body>
</html>