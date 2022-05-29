<?php 
if(isset($_POST['generate_text']))
{
 include('phpqrcode2/phpqrcode/qrlib.php'); 
 $text=$_POST['qr_text'];
 $folder="images/";
 $file_name="qr1".date('m-d-Y-His A e').".png";
 $file_name=$folder.$file_name;
 QRcode::png($text,$file_name);
 //echo"<img src='images/qr.png'>";
 //
 echo $file_name;
 
 //To Display Code Without Storing
 QRcode::png($text);
}
?>