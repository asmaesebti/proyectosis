<!DOCTYPE html>
<html>
<!-- CREATE TABLE `student`(
  `name` VARCHAR(250) NOT NULL ,
  `gender` VARCHAR(250) NOT NULL ,
  `subject` VARCHAR(250) NOT NULL ,
  
  PRIMARY KEY(`name`) 

  ); -->
  <head>
  	<script src=
  	"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js">
  </script>

  <link rel="stylesheet" href=
  "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

  <script src=
  "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
</script>

<style>
	.box {
		width: 750px;
		padding: 20px;
		background-color: #fff;
		border: 1px solid #ccc;
		border-radius: 5px;
		margin-top: 100px;
	}
</style>
</head>

<body>
	<div class="container box">
		<h3 align="center">
			Geeks for Geeks Import JSON
			data into database
		</h3><br />
		
		<?php
		
			// Server name => localhost
			// Username => root
			// Password => empty
			// Database name => test
			// Passing these 4 parameters
		$connect = mysqli_connect("localhost", "root", "", "test");

		$query = '';
		$table_data = '';

			// json file name  generated.json
		$filename = "college_subjects.json";

			// Read the JSON file in PHP
		$data = file_get_contents($filename);

			// Convert the JSON String into PHP Array
		$array = json_decode($data, true);

			// Extracting row by row
		foreach($array as $row) {

				// Database query to insert data
				// into database Make Multiple
				// Insert Query
			$query .=
			"INSERT INTO student VALUES
			('".$row["name"]."', '".$row["gender"]."',
				'".$row["subject"]."'); ";

				$table_data .= '
				<tr>
				<td>'.$row["name"].'</td>
				<td>'.$row["gender"].'</td>
				<td>'.$row["subject"].'</td>
				</tr>
				'; // Data for display on Web page
			}

			if(mysqli_multi_query($connect, $query)) {
				echo '<h3>Inserted JSON Data</h3><br />';
				echo '
				<table class="table table-bordered">
				<tr>
				<th width="45%">Name</th>
				<th width="10%">Gender</th>
				<th width="45%">Subject</th>
				</tr>
				';
				echo $table_data;
				echo '</table>';
			}
			?>
			<br />
		</div>
		<?php

	// json file name  generated.json
		$filename = "generated.json";

			// Read the JSON file in PHP
		$data = file_get_contents($filename);

			// Convert the JSON String into PHP Array
		$array = json_decode($data, true);

		JSON_to_table($array);

		function JSON_to_table($j_obj, $tblName = "New_JSON_table"){
			$connect = mysqli_connect("localhost", "root", "", "test");
			$filename = "generated.json";
			$data = file_get_contents($filename);
			$j_obj = json_decode($data, true);
			if(!mysqli_num_rows( mysqli_query($connect,"SHOW TABLES LIKE '" . $tblName . "'"))){ 
				$cq = "CREATE TABLE ". $tblName ." (
				id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,";
				foreach($j_obj as $j_arr_key => $value){
					$cq .= $j_arr_key . " VARCHAR(256),";
				}
				$cq = substr_replace($cq,"",-1);
				$cq .= ")";
				mysqli_query($connect,$cq) or die(mysqli_error($connect));
			}

			$qi = "INSERT INTO $tblName (";
				reset($j_obj);
				foreach($j_obj as $j_arr_key => $value){
					$qi .= $j_arr_key . ",";
				}
				$qi = substr_replace($qi,"",-1);
				$qi .= ") VALUES (";
				reset($j_obj);
				foreach($j_obj as $j_arr_key => $value){
					$qi .= "'" . mysqli_real_escape_string($connect,$value) . "',";
				}
				$qi = substr_replace($qi,"",-1);
				$qi .= ")";
				$result = mysqli_query($connect,$qi) or die(mysqli_error($connect));

				return true;
			}
			?>

		</body>

		</html>
