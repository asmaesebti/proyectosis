<?php

$str_json = file_get_contents('php://input'); //($_POST doesn't work here)
$response = json_decode($str_json, true); // decoding received JSON to array

$lName = $response[0];
$age = $response[1];
$profesion = $response[2];



echo '
<div align="center">
<h5> Received data: </h5>
<table border="1" style="border-collapse: collapse;">
 <tr> <th> First Name</th> <th> Age</th> <th> Profesion</th></tr>
 <tr>
 <td style="color:red;"> <center> '.$lName.'</center></td>
 <td style="color:green;"> <center> '.$age.'</center></td>
 <td style="color:blue;"> <center> '.$profesion.'</center></td>
 </tr>
 </table></div><br><div><p><center> ' . $response[0] . ' ' . $response[1] . ' ' . $response[2]  . '</center></p></div>
 ';
?>