<?php

require_once "conexion.php";

class UserModel{

    public static function loginUser($nombre, $pass){

        $stmt = Conexion::conectar()->prepare("SELECT usuario, pass, activate FROM users WHERE usuario = :nom AND pass = :pas");

        $stmt->bindParam(":nom", $nombre, PDO::PARAM_STR);
        $stmt->bindParam(":pas", $pass, PDO::PARAM_STR);
        

        $stmt->execute();

        $usuario = $stmt->fetch();

        if($usuario){

            return $usuario;

        }else{

            return "error";

        }

        $stmt->close();
        $stmt = null;

    }


}