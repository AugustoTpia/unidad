<?php

class Conexion{
    public static function conectar(){
      //definimos los parametros mediante PDO
      $link = new PDO("mysql:host=localhost;dbname=ivec_genero", "root","root");

      $link->exec("set names utf8");  //esto es para que todo lo que venga en caracteres latinos se reciban sin problema
      return $link; //retornamos la conexion
    }
  
}
