<?php  
	require_once 'config/global.php';
	require_once 'core/ControladorBase.php';
	require_once 'core/ControladorFrontal.func.php';

	if(isset($_GET["controller"])){
	    $controladorObj = cargarControlador($_GET["controller"]);
	    lanzarAccion($controladorObj);
	}else{
	    $controladorObj = cargarControlador(CONTROLADOR_DEFECTO);
	    lanzarAccion($controladorObj);
	}


?>