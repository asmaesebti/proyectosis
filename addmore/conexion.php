<?php 


	 $host = "localhost";
	 $usuario = "root";
	 $password = "";
	 $nombreBaseDatos = "proyectosis";

	 $connection = mysqli_connect($host, $usuario, $password, $nombreBaseDatos);

	// para comprobar que la conexion se ha hecho correctamente

	 if ($connection) {
	// 	echo "conectado correctamente";
	 }else{
	// 	echo "no se pudo conectar";
	 }

 ?>