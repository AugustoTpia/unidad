<?php

class TacharlaController{

    public static function getTacharlaCardC(){

        $tabla = "talleres_charlas";

        $tacharlaCards = TacharlaModel::getTacharlaCardM($tabla);

        return $tacharlaCards;


    }

    public static function addCard($valor){

        if(isset($_POST["titleInput"])){

                $tabla = "";

                if($valor === 1){

                    $tabla = "talleres_charlas";
                    $tokenT = $_POST["tokenTCharla"];

                    $tab2 = csrf::checkTokenCSRF($tokenT);

                    if($tab2){

                        $nombre_tmp = $_FILES["imgInput"]["tmp_name"];
                        $nombre = basename($_FILES["imgInput"]["name"]);
                        move_uploaded_file($nombre_tmp, "img/talleres/".$nombre);

                        $datos = array(
                            'titulo' => strip_tags($_POST["titleInput"]),
                            'texto' => strip_tags($_POST["textoInput"]),
                            'link' => strip_tags($_POST["linkInput"]),
                            'imagen' => strip_tags($_FILES["imgInput"]["name"]),

                        );

                        $resp = TacharlaModel::addCardTacharla($datos, $tabla);

                        if($resp == "ok"){

                            echo "<script>
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Tarjeta creada correctamente',
                                showConfirmButton: true,
                                timer: 2500
                              }).then((result) => {
                                 
                                    window.location = '../admin';
                                
                              })
                              </script>";


                        }else{
                            echo "<script>
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'No se ha podido crear la tarjeta',
                                showConfirmButton: false,
                                timer: 2500
                              })</script>";
                        }

                    }
                    else{
                        echo "<script>console.log('HACK MAL');</script>";
                    }
                
            }
        }

    }

    /** Update Cards */

    public static function upCard($valor1){

        if(isset($_POST["titleInputEdit"])){

                $tabla1 = "";

                if($valor1 === 1){

                    $tabla1 = "talleres_charlas";
                    $tokenT1 = $_POST["tokenTCharlaUpdt"];

                    $tab21 = csrf::checkTokenCSRF($tokenT1);

                    $imag = "";

                    if(empty($_FILES["imgInputEdit"]["tmp_name"])){
                        $imag = $_POST["imgReal"];
                    }else{
                        $imag = $_FILES["imgInputEdit"]["name"];
                    }

                    if($tab21){

                        $nombre_tmp = $_FILES["imgInputEdit"]["tmp_name"];
                        $nombre = basename($_FILES["imgInputEdit"]["name"]);
                        move_uploaded_file($nombre_tmp, "img/talleres/".$nombre);

                        $datos = array(
                            'idTC' => $_POST["idCardTCharla"],
                            'titulo' => strip_tags($_POST["titleInputEdit"]),
                            'texto' => strip_tags($_POST["textoInputEdit"]),
                            'link' => strip_tags($_POST["linkInputEdit"]),
                            'imagen' => strip_tags($imag),

                        );

                        $resp = TacharlaModel::updtCardTacharla($datos, $tabla1);

                        if($resp == "ok"){

                            echo "<script>
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Tarjeta creada correctamente',
                                showConfirmButton: true,
                                timer: 2500
                              }).then((result) => {
                                 
                                    window.location = '../admin';
                                
                              })
                              </script>";


                        }else{
                            echo "<script>
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'No se ha podido crear la tarjeta',
                                showConfirmButton: false,
                                timer: 2500
                              })</script>";
                        }

                    }
                    else{
                        echo "<script>console.log('HACK MAL');</script>";
                    }
                
            }
        }

    }

}