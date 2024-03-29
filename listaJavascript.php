<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
    .employpage{
      display: flex;
      width: 1000px;
      flex-wrap: wrap;
      margin: auto;
      font-family: verdana;
      font-size: 16px;
      border: solid 2px #f1f1f1;
  }
  .employpage .formdata{
    width:40%;
    padding:15px;
  }
  .employpage .display_table {
    padding:15px;
    width:52%;
  }
  .employpage .display_table table{
    border:solid 1px #ccc;
  }
  .employpage .display_table td, 
  .employpage .display_table th{
    border-left:solid 1px #ccc;
    border-bottom:solid 1px #ccc;
    padding:10px 5px;
    text-align:left;
    font-size:13px;
  }
  .employpage .display_table td:first-child, 
  .employpage .display_table th:first-child{
    border-left:none;
  }

  .employpage .display_table tr{
    border-bottom:solid 1px #ccc;
  }
  .employpage .display_table tr:last-child td{
    border-bottom:none;
  }
  
  .formdata form{
    display:flex;
    flex-wrap:wrap;
    background:#f1f1f1;
    padding:15px;
  }
  .formdata form label{
    width:100px;
  }
  .formdata form input, .formdata label{
    margin:10px 0;
    padding:5px;
  } 
  .formdata form input{
    width:200px;
    padding:7px;
  }
  .formdata th{
    background:#f1f1f1; 
    font-size:14px; 
    font-weight:bold;
    text-align:left;
  }
  .formdata .button{
    background:#000;
    padding:5px 10px;
    font-size:20px;
    margin:25px auto;
    display:table;
    color:#fff;
  }
</style>
</head>
<body>
	<div class="employpage"> 
  <div class="formdata">
    
  <form onsubmit="event.preventDefault();" autocomplete="off">
      

      <label>Name</label>
      <input type="text" class="empname" value=""  placeholder="Employ Name">

      <label>Designation</label>
      <input type="text" class="designation" value=""  placeholder="Employ Designation">

      <label>Mobile</label>
      <input type="text" class="mobile" value=""  placeholder="Employ Mobile">

      <label>Salary</label>
      <input type="text" class="empsalary" value="" placeholder="Employ Salary">

      <div style="width:100%">
      <input type="submit"  value="Submit"  class="button">
      
      </div>
    </form>

  </div>

  <div class="display_table">
              <table class="list" id="employeeList">
                    <thead>
                         <tr>
                      <th>Id</th>         
                      <th>Full Name</th>
                      <th>Designation</th>
                      <th>Mobile</th>
                      <th>Salary</th>                      
                      <th>Edit</th>
                  </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
  </div>
</div>
<script>

var selectedRow = null;
var btn = document.querySelector(".button")
btn.addEventListener("click", employdata);


function employdata(){
  var ax = read_Input_Value();
  if (selectedRow == null){
    create_Tr_Td(ax);
    remove_input_value()
  }
  else{   
    updatefunc(ax); 
    remove_input_value(); 
    selectedRow = null;
  }

}

function read_Input_Value(){
  var redemp={} 
  redemp["ename"] = document.querySelector(".empname").value;
  redemp["des"] = document.querySelector(".designation").value;
  redemp["mob"] = document.querySelector(".mobile").value;
  redemp["salary"] = document.querySelector(".empsalary").value;
  return redemp
}
function create_Tr_Td(x){
  var empTable = document.querySelector(".list");
  var emp_tr = empTable.insertRow(empTable.length);
  var emp_td1 = emp_tr.insertCell(0);
  var emp_td2 = emp_tr.insertCell(1);
  var emp_td3 = emp_tr.insertCell(2);
  var emp_td4 = emp_tr.insertCell(3);
  var emp_td5 = emp_tr.insertCell(4);
  var emp_td6 = emp_tr.insertCell(5);
  var totalRowCount = document.querySelector(".list tr").length;
  emp_td1.innerHTML = empTable.rows.length-1;
  //Note:- .rows.length = return no of row 

  emp_td2.innerHTML = x.ename;   
    emp_td3.innerHTML = x.des;
    emp_td4.innerHTML = x.mob;
  emp_td5.innerHTML = x.salary;
  
  emp_td6.innerHTML = '<a class="edt" onClick="onEdit(this)">Edit</a>  / <a class="dlt" onClick="onDelete(this)">Delete</a>';
}

function remove_input_value(){
  document.querySelector(".empname").value= " ";
  document.querySelector(".designation").value= " ";
  document.querySelector(".mobile").value= " ";
  document.querySelector(".empsalary").value= " ";  
}

function onEdit(y){
  console.log(y);

  //var selecteventbtn = document.querySelector("a.edt");
    selectedRow = y.parentElement.parentElement;
    //document.querySelector(".empid").value = selectedRow.cells[0].innerHTML;
    document.querySelector(".empname").value = selectedRow.cells[1].innerHTML;
    document.querySelector(".designation").value = selectedRow.cells[2].innerHTML;
     document.querySelector(".mobile").value = selectedRow.cells[3].innerHTML;
    document.querySelector(".empsalary").value = selectedRow.cells[4].innerHTML;
}

function updatefunc(redemp){
  selectedRow.cells[1].innerHTML = redemp.ename;
  selectedRow.cells[2].innerHTML = redemp.des;
  selectedRow.cells[3].innerHTML = redemp.mob;
  selectedRow.cells[4].innerHTML = redemp.salary;
  
}


function onDelete() {
    if (confirm('Are you sure to delete this record ?')) {
        var selectdelete = document.querySelector("a.dlt");
        selectdelete = selectdelete.parentElement.parentElement.remove(0);
    }
}


</script>
</body>
</html>