<?php

require('../conexion.php');
header('Content-Type: text/html; charset=ISO-8859-1');
$texto = "";
$warning = 60 * 60 * 24 * 3;
$today = date("U");
$sql = "SELECT * FROM proyectosis";
$querydate   =  mysqli_query($connection,$sql) or die (mysqli_error($connection));
// try {
while ($roedate = mysqli_fetch_array($querydate))
{
    $date1 = $roedate['au'];
                $date=strtotime($date1.' -3 days'); // Remove the date
                echo '<br>';
               //cho  $date;
                $today = strtotime(date('Y-m-d'));
              //echo $today = strtotime(date('Y-m-d')); // User strtotime

                if ($date==$today) {


                    $texto .= "<h4 style='color:green;'>" . utf8_decode("Email notification d'echeance de la police d'assurance de client assuré :  " . $roedate['assure'] . 
                        " dans laquelle sa police d'assurance est : " . $roedate['police'] . " et sa date d'echeance est : " . $roedate['au']) . "</h4>";

                    $texto .= "<br>";      
                }

            }
            if (!empty($texto)) {
             echo $texto;
         } else{
            echo "Rien";
         }

       //  echo $texto; 

         ?>

