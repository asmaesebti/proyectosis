<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL ^ E_NOTICE);
    $con=mysqli_connect("localhost","root","","proyectosis");
    $table=mysqli_select_db($con,"proyectosis") or die (mysqli_error($con));
    if(isset($_POST['submit']))
    {
    $count2 = $_POST["hidden"];
    $dbName = $_POST["dbName"];
    $tablename = $_POST["TableName"];

     for($i=1;$i<=$count2;$i++)
        $c = $_POST["ColonName$i"];
        $l = $_POST["LengthValues$i"];
        $co = $_POST["Comments$i"];
        $sql = "CREATE TABLE `".$tablename."` ( `".$c."` VARCHAR(".(int)$_POST["LengthValues$i"]."), age INT, car VARCHAR(30))";
     {
     $save = mysqli_query($con, $sql);
     }
    if($save)
    { 
    echo '<script type="text/javascript">alert("Saved Success !");</script>';
    }
    else
    {
    echo '<script type="text/javascript">alert("Failed");</script>';
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    }
    }
    ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>My Multiple Save </title>
    </head>

    <body>
    <center>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="GET"> <!-- Form for generate no of times -->
    <table align="center">
    <tr>
        <th colspan="3" align="center">Order Num Of Rows</th>
    </tr>
    <tr> 
        <td>VT ismi</td>
        <td><input type="text" name="dbName" /></td>
        <td>TabloAd</td>
        <td><input type="text" name="TableName" /></td>
        <td>No Of</td>
        <td><input type="text" name="no" /></td>
        <td><input type="submit" name="order" value="Generate" /></td>
    </tr>
    </table>
    </form><!-- End generate Form -->


    <!---- Create multiple Save Form,-->
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <table align="center">
    <tr>
        <th colspan="3" align="left">Dynamic multiple Save To MySql</th>
    </tr>
    <tr>
        <td>tabloAdi</td>
        <td>VT</td>
        <td>Colon Name</td>
        <td>Leght</td>
        <td>Comment</td>
    </tr>
    <?php
    if(isset($_GET['order']))
    {
    $count = $_GET['no']-1; //get the num of times as numeric
    while($i <= $count)// loop by using while(),NOTE the looping dynamic textbox must be under the for loop othet must be outside                                                                                                                                                                                                                                                                                                                                                                                   of while()
    {
    $i++;
    ?>
    <tr>
        <td><input type="hidden" name="TableName" value="<?php echo $_GET["TableName"]; ?>"/></td>
        <td><input type="hidden" name="dbName" value="<?php echo $_GET["dbName"]; ?>"/></td>
        <td><input type="text" name="ColonName<?php echo $i; ?>" /></td>
        <td><input type="text" name="LengthValues<?php echo $i; ?>" /></td>
        <td><input type="text" name="Comments<?php echo $i; ?>" /></td>
    </tr>
    <?php
    }}
    ?>
    <tr>
        <td colspan="3" align="center">
        <input type="hidden" name="hidden" value="<?php echo $i; ?>" /><!-- Get max count of loop -->
        <input type="submit" name="submit" value="Save Multiple" /></td>
    </tr>
    </table>
    </form>
    </center>
    </body>
    </html>