<?php

class Datos extends Conexion {
    
    public static function getDatosModel($datosModel){
        
        $tabla = $datosModel["tabla"];
        $campo = $datosModel["campo"];
        
        $stmt = Conexion::conectar()->prepare("SELECT COUNT(*) FROM $tabla WHERE $campo=:id");
        $stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_INT);
        $stmt->execute();
        $row = $stmt->fetchAll();
    }
}