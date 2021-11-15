<?php 
class Paginas{
	
	static public function enlacesPaginasModel($enlaces){
		if($enlaces == "antecedentes" ||
			$enlaces == "auditor" ||
		   $enlaces == "administrador" ||
		   $enlaces == "salir"){
			$module =  "vistas/modulos/".$enlaces.".php";
		
		}
		elseif($enlaces == "ok" || $enlaces == "index"){
			$module =  "vistas/modulos/presenta.php";
		
		}
		
		else{
			$module =  "vistas/modulos/inicio.php";
		}
		
		return $module;
	}
}