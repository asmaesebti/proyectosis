<?php 
session_start();
require_once('conexion.php');

mysqli_query($connection,"SET CHARACTER SET 'utf8'");
mysqli_query($connection,"SET SESSION collation_connection ='utf8_unicode_ci'");
$consultar = "select * from proyectosis";
$result = mysqli_query($connection, $consultar);
$array = mysqli_fetch_array($result);

// echo "<table border='1' id='table_id'>
// <tr>
// <td align=center> <b>Roll No</b></td>
// <td align=center><b>Name</b></td>
// <td align=center><b>Address</b></td>
// <td align=center><b>Stream</b></td></td>
// <td align=center><b>Status</b></td>";

// while($data = mysqli_fetch_row($result))
// {   
// 	echo "<tr>";
// 	echo "<td align=center>$data[0]</td>";
// 	echo "<td align=center>$data[1]</td>";
// 	echo "<td align=center>$data[2]</td>";
// 	echo "<td align=center>$data[3]</td>";
// 	echo "<td align=center>$data[4]</td>";
// 	echo "</tr>";
// }
// echo "</table>";
$return_arr = array();

while($row = mysqli_fetch_array($result)){
    $recu = $row['recu'];
    $assure = $row['assure'];
    $police = $row['police'];
    $email = $row['email'];

    $return_arr[] = array("recu" => $recu,
                    "assure" => $assure,
                    "police" => $police,
                    "email" => $email);
}

echo json_encode($return_arr);

?>
