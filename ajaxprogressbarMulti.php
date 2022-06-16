<?php 

var_dump($_FILES);

foreach ($_FILES['myFiles']["tmp_name"] as $key => $value) {
	// code...


$targetPath = "uploadsAjaxBar/" . basename($_FILES["myFiles"]["name"][$key]);
move_uploaded_file($value, $targetPath);

}








 ?>