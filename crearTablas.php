<?php require 'conexion.php';?>
<html>
<head>
	<title>Order</title>
	<script type="text/javascript">


		function updateForm() {

			var tablename = document.getElementById("tablen").value;


			document.getElementById("demo").innerHTML=tablename;


			var fieldname = document.getElementById("fieldn").value;

			var fieldtype = document.getElementById("fieldt").value;


			var table=document.getElementById("results");
			var row=table.insertRow(-1);
			var cell1=row.insertCell(0);
			var cell2=row.insertCell(1);


			cell1.innerHTML=fieldname;
			cell2.innerHTML=fieldtype;        



		}


	</script>
</head>
<body>
	<form name="order" method="post" id="frm1">
		<table>
			<tr>
				<td>
					<label for="tablename">Table Name </label>
				</td>
				<td>
					<input id="tablen" name="tablename" title="Please enter only alphabetic characters" type="text" size="28" />
				</td>
				<td></td>
			</tr>
			<tr>
				<td>
					<label for="fieldname">Field Name</label>
				</td>
				<td>
					<input id="fieldn" name="fieldname" title="Enter item quantity" width="196px" />
				</td>
			</tr>
			<tr>
				<td>
					<label for="fieldtype">Field Type</label>

				</td>
				<td>
					<select name="fieldtype" id="fieldt" required="required">

						<option value="">Select</option>
						<option value="int(11) NOT NULL AUTO_INCREMENT">int(11)</option>
						<option value="decimal NOT NULL">decimal</option>
						<option value="varchar(50) NOT NULL">varchar(50)</option>
						<option value="text NOT NULL">text</option>
						<option value="char NOT NULL">char</option>
						<option value="longtext NOT NULL">longtext</option>
						<option value="year NOT NULL">year</option>
						<option value="date NOT NULL">date</option>
						<option value="time NOT NULL">time</option>
						<option value="binary NOT NULL">binary</option>
						<option value="float NOT NULL">float</option>
					</select>
				</td>

			</tr>
		</table>
		<input type="reset" name="reset" id="resetbtn" class="resetbtn" value="Reset" />
		<button type="button" onClick="updateForm();"/>Add To Table</button>
	</form>
	<br>



	<form  method="post" action="insert.php">
		<table id="results" border="2" width="360">
			<thead>
				<tr>
					<th scope="col" width="120">Table Name</th>
					<th scope="col" width="120">
						<p id="demo"></p>
					</th>
				</tr>
				<tr>

					<th scope="col" width="120" id="fieldname1">Field Name</th>
					<th scope="col" width="120" id="fieldtype1">Field Type</th>

				</tr>
			</thead>
			<input type="submit" name="submit" value="Save Mode"  />
		</table>
	</form>


</body>
</html>					
