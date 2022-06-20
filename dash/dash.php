<?php 

require("conexion.php");
session_start();

$consultar = "select * from escuela";
$query = mysqli_query($connection, $consultar);
$array = mysqli_fetch_array($query); 

if ($result = mysqli_query($connection, $consultar)) {

    // Return the number of rows in result set
    $rowcountE = mysqli_num_rows( $result );
    
}

$consultarA = "select * from alumnos";
$queryA = mysqli_query($connection, $consultarA);
$arrayA = mysqli_fetch_array($queryA); 

if ($result = mysqli_query($connection, $consultarA)) {

    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
    
}

$consultarP = "SELECT p.sueldo as sueldo, p.nombre as nombre_p, e.nombre as nombre_e FROM `profesores` p inner join escuela e where p.id_escuela = e.id";
$queryP = mysqli_query($connection, $consultarP);
$arrayP = mysqli_fetch_array($queryP); 

$consultarPr = "select * from profesores";
if ($resultP = mysqli_query($connection, $consultarPr)) {

    // Return the number of rows in result set
    $rowcountP = mysqli_num_rows( $resultP );
    
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
            <li><img src="dashboard (2).png" alt="">&nbsp; <span>Menu</span> </li>
            <li><img src="reading-book (1).png" alt="">&nbsp;<span>Alumnos</span> </li>
            <li><img src="teacher2.png" alt="">&nbsp;<span>Profesores</span> </li>
            <li><img src="school.png" alt="">&nbsp;<span>Escuelas</span> </li>
            <li><img src="payment.png" alt="">&nbsp;<span>Sueldos</span> </li>
            <li><a href="form.php"><img src="teacher2.png" alt="">&nbsp; <span>Formulario contacto</span></a></li>
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
                        <h3>Alumnos</h3>
                    </div>
                    <div class="icon-case">
                        <img src="students.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1><?php echo $rowcountP; ?></h1>
                        <h3>Profesores</h3>
                    </div>
                    <div class="icon-case">
                        <img src="teachers.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1><?php echo $rowcountE; ?></h1>
                        <h3>Escuelas</h3>
                    </div>
                    <div class="icon-case">
                        <img src="schools.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <?php 
                        $consultarSueldo = "SELECT sum(sueldo) as total FROM `profesores` ";
                        $queryS = mysqli_query($connection, $consultarSueldo);
                        while ($a = mysqli_fetch_assoc($queryS)){ ?>
                            <h1><?php echo $a['total']; ?></h1>
                        <?php  }  ?>
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
                        <h2>Pagos recientes</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Nombre Profesor</th>
                            <th>Escuela</th>
                            <th>Cantidad</th>
                            <th>Opciones</th>
                        </tr>
                        
                        <?php 
                        foreach ($queryP as $row) {
                            ?>
                            <tr>
                                <td><?php echo $row['nombre_p'] ?></td>
                                <td><?php echo $row['nombre_e'] ?></td>
                                <td><?php echo $row['sueldo'] ?></td>
                                <td><a href="#" class="btn">View</a></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
                <div class="new-students">
                    <div class="title">
                        <h2>Nuevos estudiantes</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Perfil</th>
                            <th>Nombre</th>
                            <th>Opcion</th>
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