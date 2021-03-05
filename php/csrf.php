<?php

class csrf
{

  //Genera una cadena de texto aleatoria
  public static function getTokenCSRF(){
    if(isset($_SESSION['token-csrf'])){
      return $_SESSION['token-csrf'];
    }else{
      $token = hash('md5', uniqid());
      $_SESSION['token-csrf'] = $token;
      return $token;
    }
  }

  //Verifica si se ha recibido un token igual que se genero aleatoreamente
  public static function checkTokenCSRF($tok)
  {
    if(isset($_SESSION['token-csrf']) && $tok === $_SESSION['token-csrf']){

        unset($_SESSION['token-csrf']);
        return true;
    }else{
      return false;
    }
  }
}