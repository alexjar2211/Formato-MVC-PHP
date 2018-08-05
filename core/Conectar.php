<?php  
class Conectar{
	private $driver;
	private $host;
	private $user;
	private $pass;
	private $database;
	private $charset;
	public static $instancia = null;
	private $conexion;

	private function __construct(){
		$db_cfg = require_once 'config/database.php';
        $this->driver=$db_cfg["driver"];
        $this->host=$db_cfg["host"];
        $this->user=$db_cfg["user"];
        $this->pass=$db_cfg["pass"];
        $this->database=$db_cfg["database"];
        $this->charset=$db_cfg["charset"];

        $this->conexion = new PDO('mysql:host=localhost;dbname='.$this->database, $this->user, $this->pass);
	}

	public static function getInstancia(){
		if(!self::$instancia){
			$miclase = __CLASS__;
			self::$instancia = new $miclase;
		}

		return self::$instancia;
	}

	public function getConexion(){
		return $this->conexion;
	}
}
?>