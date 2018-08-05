<?php 

require 'Conectar.php';

class ModeloBase{
	private $tabla;
	private $clase;
	private $instancia;
	public $conexion;

	public function __construct($tabla){
		$this->tabla = $tabla;

		$this->instancia = Conectar::getInstancia();
		$this->conexion = $this->instancia->getConexion();
	}

	public function getAll($ins){
		$sql = $this->conexion->prepare($ins);	
		$sql->execute();
		$datos = $sql->fetchAll();

		return $datos;
	}
	
	public function guardar($ins, $datos){
		$sql = $this->conexion->prepare($ins);
		$sql->execute($datos);
	}
}
?>