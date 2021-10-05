<?php
require_once "conexionLogin.php";

class ModeloAdministradores
{
    static public function mdlMostrarAdministradores($tabla, $item, $valor)
    {
        if ($item != null && $valor != null) {
            /* $item es el nombre de mi columna usuario de mi tabla cuentas y 
            con $stmt almacenamos la búsqueda*/
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
            $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch();
        } else {
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt->execute();
            return $stmt->fetchAll();
        }
    }
}
