<?php
session_start();

class LoginController{

    public static function login(){

        if(isset($_POST["nameU"], $_POST["passU"])){ /*$_POST["token"]) && $_POST["token"] != null*/

            $nombre = strip_tags($_POST["nameU"]);
            $pass = strip_tags($_POST["passU"]);

            $pass_secret = CifradoH::cifrar($pass);
            $userLogin = UserModel::loginUser($nombre, $pass_secret);

            
            if($pass_secret === $userLogin["pass"] && $userLogin["activate"] === '1'){

                $_SESSION["user"] = $userLogin["usuario"];
                $_SESSION["iniciarSesion"] = "ok";
                

                echo '<script>

                             window.location = "../admin";

                      </script>';


            }else{

               echo '<br><br><div class="alert alert-danger">El usuario no tiene permisos para ingresar</div>';

            }

        }

    }

}