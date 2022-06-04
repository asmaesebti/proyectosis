<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>dd</title>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.15.6/xlsx.full.min.js"></script>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
           <!--  <input type="file" id="fileUpload" accept=".xls,.xlsx" /> -->
            <input type="file" id="my_file_input" />
<div id='my_file_output'></div>
        </div>
        <div class="col">
           
        </div>
    </div>
</div>
   
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script> 
  <script>
        /* set up XMLHttpRequest */
        var url = "http://localhost/PROYECTOsIS/treeview/a.xlsx";
        var oReq = new XMLHttpRequest();
        oReq.open("GET", url, true);
        oReq.responseType = "arraybuffer";

        oReq.onload = function(e) {
            var arraybuffer = oReq.response;

            /* convert data to binary string */
            var data = new Uint8Array(arraybuffer);
            var arr = new Array();
            for (var i = 0; i != data.length; ++i) arr[i] = String.fromCharCode(data[i]);
            var bstr = arr.join("");

            /* Call XLSX */
            var workbook = XLSX.read(bstr, {
                type: "binary"
            });

            /* DO SOMETHING WITH workbook HERE */
            var first_sheet_name = workbook.SheetNames[0];
            /* Get worksheet */
            var worksheet = workbook.Sheets[first_sheet_name];
            console.log(XLSX.utils.sheet_to_json(worksheet, {
                raw: true
            }));

           
               
        }

        oReq.send();
    </script>
</body>
</html>