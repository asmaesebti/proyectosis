<?php 

$targetPath = "uploadsAjaxBar/" . basename($_FILES["inpFile1"]["name"]);
move_uploaded_file($_FILES["inpFile1"]["tmp_name"], $targetPath);










 ?>