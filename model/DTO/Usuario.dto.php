<?php  
class Usuario{
	private $id;
	private $nombre;

	public function __construct(){
		$tabla = 'usuario';
	}

	public function getId(){
		return $this->id;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}
}
?>