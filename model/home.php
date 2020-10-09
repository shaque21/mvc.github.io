<?php 

class homeModel{
	function __construct()
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "mvc";

		// Create connection
		try{
			$this->conn = new PDO("mysql:host=$servername;dbname=mvc", $username, $password);
		}
		catch(PDOException $e) {
		  echo "Connection failed: " . $e->getMessage();
		}
	}
	public function home()
	{
		$sql = "SELECT title, description FROM info WHERE id = '1'";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
		// print_r($data);die();
		$arr = $data[0];
		return $arr;
	}
	public function about()
	{
		$sql = "SELECT title, description FROM info WHERE id = '2'";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
		// print_r($data);die();
		$arr = $data[0];
		return $arr;
	}
	public function contact()
	{
		$sql = "SELECT title, description FROM info WHERE id = '3'";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
		// print_r($data);die();
		$arr = $data[0];
		return $arr;
	}
}

 ?>