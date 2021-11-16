<?php 
class Paginas{
	
	static public function enlacesPaginasModel($enlaces){
		if($enlaces == "antecedentes" ||
			$enlaces == "auditor" ||
		   $enlaces == "administrador" ||
		   $enlaces == "salir"){
			$module =  "vistas/modulos/".$enlaces.".php";
		
		}
		elseif($enlaces == "ok" || $enlaces == "index" || $enlaces == "inicio"){
			$module =  "vistas/modulos/dashboard.php";
		
		}
		
		else{
			$module =  "vistas/modulos/dashboard.php";
		}
		
		return $module;
	}
}