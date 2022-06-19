<?php 

require("conexion.php");
session_start();

$consultar = "select * from escuela";
$query = mysqli_query($connection, $consultar);
$array = mysqli_fetch_array($query); 

$consultarA = "select * from alumnos";
$queryA = mysqli_query($connection, $consultarA);
$arrayA = mysqli_fetch_array($queryA); 

$consultarP = "select * from profesores";
$queryP = mysqli_query($connection, $consultarP);
$arrayP = mysqli_fetch_array($queryP); 

$consultarAN = "select *  from alumnos";
$queryAN = mysqli_query($connection, $consultarAN);
if ($result = mysqli_query($connection, $consultarAN)) {

    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
    
 }


 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dash.css">
    <title>Admin Panel</title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>Brand</h1>
        </div>
        <ul>
            <li><img src="dashboard (2).png" alt="">&nbsp; <span>Dashboard</span> </li>
            <li><img src="reading-book (1).png" alt="">&nbsp;<span>Students</span> </li>
            <li><img src="teacher2.png" alt="">&nbsp;<span>Teachers</span> </li>
            <li><img src="school.png" alt="">&nbsp;<span>Schools</span> </li>
            <li><img src="payment.png" alt="">&nbsp;<span>Income</span> </li>
            <li><img src="help-web-button.png" alt="">&nbsp; <span>Help</span></li>
            <li><img src="settings.png" alt="">&nbsp;<span>Settings</span> </li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="search.png" alt=""></button>
                </div>
                <div class="user">
                    <a href="#" class="btn">Add New</a>
                    <img src="notifications.png" alt="">
                    <div class="img-case">
                        <img src="user.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1><?php echo $rowcount; ?></h1>
                        <h3>Students</h3>
                    </div>
                    <div class="icon-case">
                        <img src="students.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>53</h1>
                        <h3>Teachers</h3>
                    </div>
                    <div class="icon-case">
                        <img src="teachers.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>5</h1>
                        <h3>Schools</h3>
                    </div>
                    <div class="icon-case">
                        <img src="schools.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>350000</h1>
                        <h3>Income</h3>
                    </div>
                    <div class="icon-case">
                        <img src="income.png" alt="">
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Recent Payments</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>School</th>
                            <th>Amount</th>
                            <th>Option</th>
                        </tr>
                        
                        <?php 
                        foreach ($queryP as $row) {
                            ?>
                        <tr>
                            <td><?php echo $row['nombre'] ?></td>
                            <td><?php echo $row['id_escuela'] ?></td>
                            <td><?php echo $row['sueldo'] ?></td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                    <?php } ?>
                    </table>
                </div>
                <div class="new-students">
                    <div class="title">
                        <h2>New Students</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>option</th>
                        </tr>
                        <?php 
                        foreach ($queryA as $row) {
                            ?>
                        <tr>
                            <td><img src="<?php echo $row['perfil'] ?>" alt=""></td>
                            <td><?php echo $row['nombre'] ?></td>
                            <td><img src="info.png" alt=""></td>
                        </tr>
                         <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>