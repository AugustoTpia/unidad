<?php

class CifradoH{


    public static function cifrar($valor){

        $secret = md5($valor);

        return $secret;

    }


}