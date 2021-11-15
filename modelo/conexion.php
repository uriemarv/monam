<?php
class Conexion{
	
	
	public static function conectar(){
		
		$link = new PDO("mysql:host=localhost;dbname=monam", "monam", "monitoreoambiental", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''));
		#$link = new PDO("mysql:host=localhost;dbname=cgac","asphia2","cgacconexion");
		#$link = setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, TRUE);
		
		return $link;
			
		
	}
}