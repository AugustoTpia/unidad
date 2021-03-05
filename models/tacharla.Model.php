<?php

require_once "conexion.php";

class TacharlaModel{

    public static function getTacharlaCardM($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");


        if($stmt->execute()){

            return $stmt->fetchAll();;

        }else{

            return "No existen aún datos";

        }

        $stmt->close();
        $stmt = null;

    }

    public static function addCardTacharla($datos, $tabla){

        $add = Conexion::conectar()->prepare("INSERT INTO $tabla(imagen, titulo, texto, link, fec_creacion, activo, pos) VALUES(:ima, :tit, :tex, :lin, NOW(), 1,'0')");

        $add->bindParam(":tit", $datos["titulo"], PDO::PARAM_STR);
        $add->bindParam(":tex", $datos["texto"], PDO::PARAM_STR);
        $add->bindParam(":lin", $datos["link"], PDO::PARAM_STR);
        $add->bindParam(":ima", $datos["imagen"], PDO::PARAM_STR);

        if ($add->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $add->close();

        $add = null;


    }

    public static function updateCardTacharla($id, $valor, $tabla){

        $updt = Conexion::conectar()->prepare("UPDATE $tabla SET activo = :vall WHERE idtalleres_charlas = :idd");

        $updt->bindParam(":idd", $id, PDO::PARAM_STR);
        $updt->bindParam(":vall", $valor, PDO::PARAM_STR);

        if ($updt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $updt->close();

        $updt = null;
    }


    public static function updtCardTacharla($datos, $tabla){

        $updtC = Conexion::conectar()->prepare("UPDATE $tabla SET imagen = :imag, titulo = :titu, texto = :texo, link = :lnk WHERE idtalleres_charlas = :idd");

        $updtC->bindParam(":idd", $datos["idTC"], PDO::PARAM_STR);
        $updtC->bindParam(":titu", $datos["titulo"], PDO::PARAM_STR);
        $updtC->bindParam(":texo", $datos["texto"], PDO::PARAM_STR);
        $updtC->bindParam(":lnk", $datos["link"], PDO::PARAM_STR);
        $updtC->bindParam(":imag", $datos["imagen"], PDO::PARAM_STR);

        if ($updtC->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $updtC->close();

        $updtC = null;
    }

}