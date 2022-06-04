<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<body>
<div align="center">
    <label for="LName">Last Name</label>
    <input type="text" class="form-control" name="LName" id="LName" maxlength="15"
           placeholder="Last name"/>
</div>
<br/>

<div align="center">
    <label for="Age">Age</label>
    <input type="text" class="form-control" name="Age" id="Age" maxlength="3"
           placeholder="Age"/>
</div>
<br/>

<div align="center">
    <label for="Age">Profesion</label>
    <input type="text" class="form-control" name="Profesion" id="Profesion" maxlength="13"
           placeholder="Profesion"/>
</div>
<br/>

<div align="center">
    <button type="submit" name="submit_show" id="submit_show" value="show" onclick="actionSend()">Show
    </button>
</div>

<div id="result">
</div>

<script>
    var xmlhttp;

    function actionSend() {
        if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else {// code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        var values = $("input").map(function () {
            return $(this).val();
        }).get();
        var myJsonString = JSON.stringify(values);
        xmlhttp.onreadystatechange = respond;
        xmlhttp.open("POST", "ajax-test.php", true);
        xmlhttp.send(myJsonString);
    }

    function respond() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById('result').innerHTML = xmlhttp.responseText;
        }
    }

</script>

</body>
</html>