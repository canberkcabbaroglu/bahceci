<?php 

class harita{
	private $id;
	private $eposta;
	private $adres;
	private $telefon;
	private $lat;
	private $lng;
	private $conn;
	private $tableName = "harita";

	function setId($id) { $this->id = $id; }
	function getId() { return $this->id; }
	function setName($eposta) { $this->eposta = $eposta; }
	function getName() { return $this->eposta; }
	function setAddress($adres) { $this->adres = $adres; }
	function getAddress() { return $this->adres; }
	function setType($type) { $this->telefon = $telefon; }
	function getType() { return $this->telefon; }
	function setLat($lat) { $this->lat = $lat; }
	function getLat() { return $this->lat; }
	function setLng($lng) { $this->lng = $lng; }
	function getLng() { return $this->lng; }

	public function __construct() {
		require_once('assets/db/haritabaglanti.php');
		$conn = new DbConnect;
		$this->conn = $conn->connect();
	}

	public function getMaps() {
		$sql = "SELECT * FROM $this->tableName WHERE lat IS NULL AND lng IS NULL";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}



	


}

?>