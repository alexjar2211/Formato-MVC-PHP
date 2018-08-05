<?php

include_once 'model/DTO/Usuario.dto.php';
include_once 'core/ControladorBase.php';

class UsuarioController extends ControladorBase{

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$usuario = new Usuario();
		$this->view("Usuario", array(
			"Nombre" => "Andres"
		));
	}

	public function listarUsuarios(){
		$usuario = new UsuarioDAO();
		$datos = $usuario->listarUsuarios();

		foreach ($datos as $usuario) {
			echo $usuario['nombre'];
			echo "<br>";
		}
	}
}
?>