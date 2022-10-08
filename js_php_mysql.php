 <html>
 <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" type="text/css"/>
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css"/>
 <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.css"/>
 <link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="laListe.css">



 <script type="text/javascript">

     $(document).ready(function() {

        $("#display").click(function() {                

      $.ajax({    //create an ajax request to display.php
        type: "GET",
        url: "display.php",             
        dataType: "html",   //expect html to be returned                
        success: function(response){                    
            $("#responsecontainer").html(response); 
            //alert(response);
        }

    });
  });
    });


</script>

<body>
    <h3 align="center">Manage Student Details</h3>
    <table border="1" align="center" id="table_id">
       <tr>
           <td> <input type="button" id="display" value="Display All Data" /> </td>
           <td> <input type="button" id="btnBasicResponse" value="btnBasicResponse" /> </td>
       </tr>
   </table>
    <table border="15" align="center" id="table_id1">
       
   </table>
   <div id="responsecontainer" align="center">

   </div>
   <div id="responsecontainer1" align="center">

   </div>
   <p></p>
   <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
   <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.js"></script>

   <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
   <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
   <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
   <script type="text/javascript">
     $(document).ready( function () {
        $('#table_id').DataTable();
    } );
</script>
<script>

 $(document).delegate("#btnBasicResponse", "click", function() {

        // Ajax config
    // $.ajax({
    //         type: "GET", //we are using GET method to get data from server side
    //         url: 'display.php', // get the route value
    //        dataType: 'json',
    //         success: function (response) {//once the request successfully process to the server side it will return result here
    //             response = JSON.parse(response);
    //             console.log(response)
    //            // $("#responsecontainer1").html(response); 
    //         }
    //     });


  //   $.ajax({
  //     url: 'display.php',
  //     method: 'GET'

  // }).then(function(data) {

  //     console.log(data);
  //     $("p").text(data)
  // });
    //     $.ajax({
    //         type: "POST",
    //         url: 'display.php',
    //         //async: false,
    //         data: JSON.stringify(),
    //         contentType: "application/json;charset=utf-8",
    //         complete: function (data) {
    //             console.log(data);
    //         console.log(data.responseText);
    //         //wait = false;
    //         $("#responsecontainer1").html(data.responseText); 
    //     }
    // });

    //          $.ajax({
    //         type: "POST",
    //         url: 'display.php',
    //         //async: false,
    //         data: JSON.stringify(),
    //         contentType: "application/json;charset=utf-8",
    //         complete: function (data) {
    //             console.log(data);
    //         console.log(data.responseText);
    //         //wait = false;
    //         $("#responsecontainer1").html(data.responseText); 

    //     }
    // });

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
               $("#table_id1").append(tr_str);
         }
        

        }
    });


});
</script>
</body>
</html>