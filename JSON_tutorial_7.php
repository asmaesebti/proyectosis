<!DOCTYPE html>
<html>
<head>
<style>
div#databox {
	padding:12px;
	background: #F3F3F3;
	border:#CCC 1px solid;
	width:550px;
	height:310px;
}
</style>
<script>
var myTimer;
function ajax_json_data(){
	var databox = document.getElementById("databox");
	var arbitrarybox = document.getElementById("arbitrarybox");
    var hr = new XMLHttpRequest();
    hr.open("POST", "json_mysql_data.php", true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var d = JSON.parse(hr.responseText);
			arbitrarybox.innerHTML = d.arbitrary.returntime;
			databox.innerHTML = "";
			for(var o in d){
				if(d[o].recu){
				    databox.innerHTML += '<p><a href="page.php?recu='+d[o].recu+'">'+d[o].police+' ' + d[o].assure+'</a><br>';
					databox.innerHTML += ''+d[o].fecha_hoy+'</p>';
				}
			}
	    }
    }
    hr.send("limit=4");
    databox.innerHTML = "requesting...";
	myTimer = setTimeout('ajax_json_data()',6000);
}
</script>
</head>
<body>
<h2>Timed JSON Data Request Random Items Script</h2>
<div id="databox"></div>
<div id="arbitrarybox"></div>
<script>ajax_json_data();</script>
</body>
</html>