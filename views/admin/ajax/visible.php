<?php

require_once '../../../models/tacharla.Model.php';

    class Visible{

        public static function actVisible($dat, $valor){

            $dato = $dat;
            $tabla = "talleres_charlas";
            $val = $valor;

            $resp = TacharlaModel::updateCardTacharla($dato,$val,$tabla);

            echo $resp;
            
        }

    }

    if(isset($_POST["idVal"])){
        $changeVisi = new Visible();
        $changeVisi->actVisible($_POST["idVal"], $_POST["valV"]);
    }

    