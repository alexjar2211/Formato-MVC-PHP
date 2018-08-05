<?php
include_once 'core/ModeloBase.php';

class UsuarioDAO extends ModeloBase{
	private $tabla;

	public function __construct(){
		$this->tabla = 'usuario';
		parent::__construct($this->tabla);
	}

	public function listarUsuarios(){
		$ins = "SELECT * FROM $this->tabla";
		$usuarios = $this->getAll($ins);
		return $usuarios;
	}

	public function guardarUsuario(Usuario $usuario){
		$ins = "INSERT INTO $this->tabla (nombre) VALUES (:nombre)";

		$datos = array(
			'nombre' => $usuario->getNombre()
		);

		parent::guardar($ins, $datos);
	}
}
?>