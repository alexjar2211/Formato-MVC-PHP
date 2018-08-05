<?php  

function cargarControlador($controlador){
	$controlador = ucwords($controlador);
	$pathControlador = 'controller/'.$controlador.'.controller.php';

	if(!is_file($pathControlador)){
		$pathControlador = 'controller/'.ucwords(CONTROLADOR_DEFECTO).'controller.php';
	}

	require_once $pathControlador;
	$controlador =  $controlador.'Controller';
	$controladorObj = new $controlador();
	return $controladorObj;
}

function lanzarAccion($controladorObj){
	if(isset($_GET['action']) && method_exists($controladorObj, $_GET['action'])){
		cargarAccion($controladorObj, $_GET['action']);
	}
	else{
		cargarAccion($controladorObj, ACCION_DEFECTO);
	}
}

function cargarAccion($controladorObj, $action){
	$controladorObj->$action();
}
?>