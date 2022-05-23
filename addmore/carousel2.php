<?php
//index.php
$connect = mysqli_connect("localhost", "root", "", "proyectosis");
function make_query($connect)
{
 $query = "SELECT * FROM banner ORDER BY banner_id ASC";
 $result = mysqli_query($connect, $query);
 return $result;
}

function make_slide_indicators($connect)
{
 $output = ''; 
 $count = 0;
 $result = make_query($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '
   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'" class="active"></li>
   ';
}
else
{
   $output .= '
   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'"></li>
   ';
}
$count = $count + 1;
}
return $output;
}

function make_slides($connect)
{
 $output = '';
 $count = 0;
 $result = make_query($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '<div class="item active">';
}
else
{
   $output .= '<div class="item">';
}
$output .= '
<img src="imagenes/'.$row["banner_image"].'" alt="'.$row["banner_title"].' " />
<div class="carousel-caption">
<h3>'.$row["banner_title"].'</h3>
</div>
</div>
';
$count = $count + 1;
}
return $output;
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Carrousel</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="../index.css" rel="stylesheet">
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <br />
  <header class="container">
    <img src="../logo.png" width="100%" alt="">
</header>
<div class="container">
    <div class="col">
        <a class="btn btn-success" href="../index.php">Retour au formulaire</a>
    </div>
    <h2 align="center">Le caroussel</h2>

    <div id="dynamic_slide_show" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php echo make_slide_indicators($connect); ?>
        </ol>

        <div class="carousel-inner">
         <?php echo make_slides($connect); ?>
     </div>
     <a class="left carousel-control" href="#dynamic_slide_show" data-slide="prev">
         <span class="glyphicon glyphicon-chevron-left"></span>
         <span class="sr-only">Previous</span>
     </a>

     <a class="right carousel-control" href="#dynamic_slide_show" data-slide="next">
         <span class="glyphicon glyphicon-chevron-right"></span>
         <span class="sr-only">Next</span>
     </a>

 </div>
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
</body>
</html>