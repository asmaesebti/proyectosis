<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<title>Obteniendo Json</title>
<body>
<div id="datosPersona">

<table id="Table"></table>
</div>

<script>

   $(document).delegate("#btnBasicResponse", "click", function() {

   
                  $.ajax({
            type: "POST",
            url: 'display.php',
            //async: false,
            data: JSON.stringify(),
            contentType: "application/json;charset=utf-8",
            complete: function (data) {
                console.log(data);
                console.log(data.responseText);

         //$("#responsecontainer1").html(data.responseText); 
         const obj = JSON.parse(data.responseText);
         for(var i = 0, length1 = obj.length; i < length1; i++){
             //obj[i];
                    var recu = obj[i].recu;
                var assure = obj[i].assure;
                var police = obj[i].police;
                var email = obj[i].email;

                var tr_str = "<tr>" +
                    "<td align='center'>" + recu + "</td>" +
                    "<td align='center'>" + assure + "</td>" +
                    "<td align='center'>" + police + "</td>" +
                    "<td align='center'>" + email + "</td>" +
                    "</tr>";
              console.log(obj[i].recu);
               $("#Table").append(tr_str);
         }
        

        }
    });


});

var json = {"alumnoUTP":[{"nombre":"Ricardo","apePaterno":"Carpio","edad":39},{"nombre":"Thiago","apePaterno":"Carpio","edad":5},{"nombre":"José","apePaterno":"Carpio","edad":74}]};
function cargarDatos(){
    var DatosJson = JSON.parse(JSON.stringify(json));
    console.log(DatosJson.alumnoUTP.length);
    $("#Table").append('<tr><td>Nombre</td>'+
 	'<td>Apellido paterno</td>' + 
 	'<td>Edad</td>');
    for (i = 0; i < DatosJson.alumnoUTP.length; i++){
 
 $("#Table").append('<tr>' + 
 	'<td align="center" style="dislay: none;">' + DatosJson.alumnoUTP[i].nombre + '</td>'+
 	'<td align="center" style="dislay: none;">' + DatosJson.alumnoUTP[i].apePaterno + '</td>'+
 	'<td align="center" style="dislay: none;">' + DatosJson.alumnoUTP[i].edad + '</td>'+'</tr>');
    }
}

</script>
<button type="button" onclick="cargarDatos()">
Visualizar
</button>
<input type="button" id="btnBasicResponse" value="btnBasicResponse" />
</body>
</html>