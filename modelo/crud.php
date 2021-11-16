<?php

class Datos extends Conexion {
    
    public static function getDatosModel($datosModel){
        
        $tabla = $datosModel["tabla"];
        $campo = $datosModel["campo"];
        
        $stmt = Conexion::conectar()->prepare("SELECT municipio,AVG(valorobservado) AS valor FROM datos GROUP BY municipio");
        //$stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_INT);
        $stmt->execute();
        $row = $stmt->fetchAll();
    } 
}