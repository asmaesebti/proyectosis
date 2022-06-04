<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <title>Excel to JSON | Javacodepoint</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.5/xlsx.min.js"></script>    
</head>
<body>
  <h1>Upload an excel file to convert into JSON</h1>
 
  <input type="file" id="file_upload" />
  <button onclick="upload()">Upload</button>  
  <br>
  <br>
  <!-- container to display the json result -->
  <textarea id="json-result" style="display:none;height:500px;width:350px;"></textarea>
  <script>

      // Method to upload a valid excel file
      function upload() {
        var files = document.getElementById('file_upload').files;
        if(files.length==0){
          alert("Please choose any file...");
          return;
        }
        var filename = files[0].name;
        var extension = filename.substring(filename.lastIndexOf(".")).toUpperCase();
        if (extension == '.XLS' || extension == '.XLSX') {
          excelFileToJSON(files[0]);
        }else{
          alert("Please select a valid excel file.");
        }
      }

      //Method to read excel file and convert it into JSON 
      function excelFileToJSON(file){
        try {
          var reader = new FileReader();
          reader.readAsBinaryString(file);
          reader.onload = function(e) {

            var data = e.target.result;
            var workbook = XLSX.read(data, {
              type : 'binary'
            });
            var result = {};
            workbook.SheetNames.forEach(function(sheetName) {
              var roa = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[sheetName]);
              if (roa.length > 0) {
                result[sheetName] = roa;
              }
            });
           
            const d = new Date();
            const a =  d.getTime();
                //displaying the json result
                var resultEle=document.getElementById("json-result");
                resultEle.value=JSON.stringify(result, null, 4);
                resultEle.style.display='block';
                bake_cookie('micookie', resultEle.value);
                download(resultEle.value, 'json'+ a + '.txt', 'text/plain');
                console.log(read_cookie('micookie'));
              }
            }catch(e){
              console.error(e);
            }
          }
          function bake_cookie(name, value) {
            var cookie = [name, '=', JSON.stringify(value)];
            document.cookie = cookie;
          }
          function delete_cookie(name) {
            document.cookie = [name, '= '];
          }
          function read_cookie(name) {
           var result = document.cookie.match(new RegExp(name + '=([^;]+)'));
           result && (result = JSON.parse(result[1]));
           return result;
         }


         function download(content, fileName, contentType) {
          var a = document.createElement("a");
          var file = new Blob([content], {type: contentType});
          a.href = URL.createObjectURL(file);
          a.download = fileName;
          a.click();
        }

      </script>
    
   </body>
   </html>