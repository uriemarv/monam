<?php

class MvcController {

	
	public function pagina(){	
		
		include "vistas/template.php";
	
	}
	
	public function enlacesPaginasController(){
		if(isset($_GET["action"])){
			
			#$rutas = array();
			#$rutas = explode("/", $_GET["action"]);
			
			$enlaces = $_GET["action"];
			@session_start();
			$_SESSION["action"] = $enlaces;
		
		}
		else{
			$enlaces = "index";
		}
		$respuesta = Paginas::enlacesPaginasModel($enlaces);
		include $respuesta;
	}
	
	public function getDatosController($datosController){
	    
	    $datos = Datos::getDatosModel($datosController);
	    
	    return $datos;
	}
}