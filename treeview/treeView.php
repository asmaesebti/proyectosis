<?php 
include "config.php";
?>

<!DOCTYPE html>
<html>
<head>
   <title>Create Treeview with jsTree plugin and PHP</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/themes/default/style.min.css" />
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/jstree.min.js"></script>
</head>
<body>
   <?php 
   $folderData = mysqli_query($con,"SELECT * FROM folders");

   $folders_arr = array();
   while($row = mysqli_fetch_assoc($folderData)){
      $parentid = $row['parentid'];
      if($parentid == '0') $parentid = "#";

      $selected = false;$opened = false;
      if($row['id'] == 2){
         $selected = true;$opened = true;
      }
      $folders_arr[] = array(
         "id" => $row['id'],
         "parent" => $parentid,
         "text" => $row['name'],
         "state" => array("selected" => $selected,"opened"=>$opened) 
      );
   }

   ?>

   <!-- Initialize jsTree -->
   <div id="folder_jstree"></div>

   <!-- Store folder list in JSON format -->
   <textarea id='txt_folderjsondata'><?= json_encode($folders_arr) ?></textarea>
<script type="text/javascript">
	$(document).ready(function(){
   var folder_jsondata = JSON.parse($('#txt_folderjsondata').val());

   $('#folder_jstree').jstree({ 'core' : {
      'data' : folder_jsondata,
      'multiple': false
   } });

});
</script>
</body>
</html>