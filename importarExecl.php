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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css"/>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>
   <title>Proyecto SIS</title>
</head>
<body style="background-color: beige;">
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
    <h2 class="d-flex justify-content-center">Importer fichier Excel a la base de données MySQL avec PHP</h2>
    
    <div class="container">
        <form action="importar.php" method="post" name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
        <div class="container">
            <div class="row mt-4 ">
                 <div class="col-3 d-flex justify-content-center align-content-center">
                     <label class="btn btn-warning" >Choose Excel File</label> 
                 </div>
                  <div class="col">
                      <input class="btn btn-success" type="file" name="file" id="file" accept=".xls,.xlsx"/>
                  </div>
            </div>
           <div class="row mt-4">
               <button type="submit" id="submit" name="import" class="btn-primary btn-submit">Import</button>
               <a class="btn btn-success mt-3" href="index.php" role="button">Salir</a>
           </div>
           
        </div>
    </form>


</div>
<div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?></div>
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
</body>
</html>