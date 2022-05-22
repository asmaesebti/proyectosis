<?php 

class BaseDatos{
	//data source network
	private $dsn = "mysql:host=localhost;dbname=proyectosis";
	private $usuario = "root";
	private $contrasena = "";
	private $conn;

	public function __construct(){
		try {
			$this->conn = new PDO($this->dsn,$this->usuario,$this->contrasena);
			// echo "conectado";
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function insertar($nombre, $apellidos,$email,$telefono){
		$sql = "INSERT INTO usuarios (nombre, apellidos, email,telefono) VALUES (:nombre,:apellidos,:email,:telefono)";

		$stmt = $this->conn->prepare($sql);
		$stmt->execute(['nombre' => $nombre, 'apellidos' => $apellidos , 'email' => $email , 'telefono' => $telefono]);

		return true;
	}

	public function mostrarTodos(){
		$datos = array();

		$sql = "SELECT * FROM usuarios";

		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

		foreach ($resultado as $fila) {
			$datos[] = $fila;
		}
		return $datos;
	}

	public function obtenerUsuarioPorId($id){


		$sql = "SELECT * FROM usuarios WHERE id = :id";

		$stmt = $this->conn->prepare($sql);
		$stmt->execute(['id' => $id]);

		$resultado = $stmt->fetch(PDO::FETCH_ASSOC);

		return $resultado;
	}

	public function actualizar($id, $nombre, $apellidos, $email, $telefono){

		$sql = "UPDATE usuarios SET nombre = :nombre , apellidos = :apellidos, email = :email , telefono = :telefono WHERE id = :id";

		$stmt = $this->conn->prepare($sql);

		$stmt->execute(['nombre' => $nombre , 'apellidos' => $apellidos , 'email' => $email, 'telefono' => $telefono, 'id' => $id]);

		return true;
	}

	public function eliminar($id){

		$sql = "DELETE FROM usuarios WHERE id = $id";

		$stmt = $this->conn->prepare($sql);

		$stmt->execute(['id' => $id]);

		return true;
	}

	public function numeroTotalDeFilas(){
		$sql = "SELECT * FROM usuarios";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$totalFilas = $stmt->rowCount();

		return $totalFilas;
	}
}

// $obj = new BaseDatos();
// echo "<pre>";
// print_r($obj->mostrarTodos());
// echo "</pre>";
// echo "<pre>";
// print_r($obj->numeroTotalDeFilas());
// echo "</pre>";
//  ?>