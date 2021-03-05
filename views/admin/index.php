<?php

session_start();

if($_SESSION["iniciarSesion"] != "ok"){

    header("Location: ../gestor");
}

?>
<!DOCTYPE html>
<html lang="en">

<?php

    include('../../php/header.php'); 
    require_once '../../php/csrf.php';

    require_once '../../controllers/tacharla.Controller.php';
    require_once '../../models/tacharla.Model.php';
    
?>

<body>
    <div class="container">
        <?php
            include('../../php/navbar.php');

            $dataCards = TacharlaController::getTacharlaCardC();
        ?>
        <br><br>
             <div class="shadow p-3 mb-5 bg-body rounded">
                <div class="form-check form-switch">
                    <?php echo '<input class="form-check-input" type="checkbox" id="flexSwitchCheck" checked>';?>
                    <label class="form-check-label" for="flexSwitchCheck">Tarjetas Ocultas</label>
                </div>
                <h3 class="text-center">Talleres y Charlas</h>
                <div class="col-md-12 row">
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                    <?php
                        foreach($dataCards as $key => $value){

                            $visi;
                            $ojo;
                            $sta;

                            $datosA = array(
                                "idCC" => $value["idtalleres_charlas"],
                                "imagen" => $value["imagen"],
                                "titulo" => $value["titulo"],
                                "texto" => $value["texto"],
                                "link" => $value["link"]
                            );

                            $dat = json_encode($datosA);

                            if($value["activo"] == "0"){
                                $visi = "filter: grayscale(100%); opacity: 0.4";
                                $ojo = "fa-eye";
                                $sta = "1";
                                $hid = "visual";
                                $hid2 = "hidden";
                            }else{
                                $visi = "";
                                $ojo = "fa-eye-slash";
                                $sta = "0";
                                $hid = "";
                                $hid2 = "";
                            }

                            echo '<div class="col '.$hid.'" '.$hid2.'>
                                    <div class="card">
                                        <img src="img/talleres/'.$value["imagen"].'" class="card-img-top" alt="..." style="'.$visi.'">
                                        <div class="card-body">
                                            <p class="card-title fs-4" >'.$value["titulo"].'</p><hr>
                                            <p class="card-text fs-5 fw-light" style="text-align: justify">'.$value["texto"].'</p>
                                        </div>
                                        <div class="card-footer text-muted" style="font-size: 16px; text-align: right;">
                                            <i onclick="lapiz(\''.$value["idtalleres_charlas"].'\', \''.$value["imagen"].'\', \''.$value["titulo"].'\', \''.$value["texto"].'\', \''.$value["link"].'\')" class="fa fa-pencil fa-2x pe-4" style="cursor:pointer" data-bs-toggle="modal" data-bs-target="#staticUpdt"></i>
                                            <i onclick="ojos(\''.$value["idtalleres_charlas"].'\', \''.$sta.'\')" class="fa '.$ojo.' fa-2x" style="cursor:pointer" ></i>
                                      </div>
                                    </div>
                                </div>';

                        }

                    ?>

                
                        <div class="col">
                            <div class="card" style="cursor:pointer" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <i class="fa fa-plus-circle fa-5x" aria-hidden="true" style="color: #DEDEDC"></i>
                                <hr>
                                AGREGAR
                            </div>
                        </div>
                    </div>
                </div>
            </div>

</div>

    <!-- ÁREA DE MODAL-->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <form method="post" enctype="multipart/form-data">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Agregar Talleres y Charlas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <div class="row col-md-12">
            <div class="col-md-6">
                <div class="position-relative">
                    <label for="imgInput" class="form-label">Imagen</label>
                    <input type="file" class="form-control" id="imgInput" name="imgInput">
                </div>
                <br>
                <div class="position-relative">
                    <label for="titleInput" class="form-label">Título</label>
                    <textarea class="form-control" id="titleInput" name="titleInput" ></textarea>
                </div>
                <br>
                <div class="position-relative">
                    <label for="textoInput" class="form-label">Texto</label>
                    <textarea class="form-control" id="textoInput" name="textoInput" ></textarea>
                </div>
                <br>
                <div class="position-relative">
                    <label for="linkInput" class="form-label">Link</label>
                    <textarea class="form-control" id="linkInput" name="linkInput" ></textarea>
                </div>
                
            </div>
            <div class="col-md-6">
                <div class="card">
                    <img src="" class="card-img-top previsualizar" alt="...">
                    <div class="card-body">
                        <p class="card-title fs-4" id="titleM"></p><hr>
                        <p class="card-text fs-5 fw-light" style="text-align: justify" id="textoM"></p>
                    </div>
                </div>
            </div>
            <input type="hidden" name="tokenTCharla" value="<?php echo csrf::getTokenCSRF(); ?>">
            
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Agregar</button>
      </div>
      <?php
        $agregaCardTCharla = new TacharlaController();
        $agregaCardTCharla->addCard(1);
      
        ?>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="staticUpdt" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <form method="post" enctype="multipart/form-data">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Actualizar Talleres y Charlas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <div class="row col-md-12">
            <div class="col-md-6">
                <div class="position-relative">
                    <label for="imgInput" class="form-label">Imagen</label>
                    <input type="file" class="form-control" id="imgInputEdit" name="imgInputEdit">
                </div>
                <br>
                <div class="position-relative">
                    <label for="titleInput" class="form-label">Título</label>
                    <textarea class="form-control" id="titleInputEdit" name="titleInputEdit" ></textarea>
                </div>
                <br>
                <div class="position-relative">
                    <label for="textoInput" class="form-label">Texto</label>
                    <textarea class="form-control" id="textoInputEdit" name="textoInputEdit" ></textarea>
                </div>
                <br>
                <div class="position-relative">
                    <label for="linkInput" class="form-label">Link</label>
                    <textarea class="form-control" id="linkInputEdit" name="linkInputEdit" ></textarea>
                </div>
                
            </div>
            <div class="col-md-6">
                <div class="card">
                    <img src="" class="card-img-top previsualizar" alt="...">
                    <div class="card-body">
                        <p class="card-title fs-4" id="titleMEdit"></p><hr>
                        <p class="card-text fs-5 fw-light" style="text-align: justify" id="textoMEdit"></p>
                    </div>
                </div>
            </div>
            <input type="hidden" name="tokenTCharlaUpdt" value="<?php echo csrf::getTokenCSRF(); ?>">
            <input type="hidden" id="idCardTCharla" name="idCardTCharla">
            <input type="hidden" id="imgReal" name="imgReal">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
      <?php
        $updtCardTCharla = new TacharlaController();
        $updtCardTCharla->upCard(1);
      
        ?>
      </form>
    </div>
  </div>
</div>


<script src="js/appAdmin.js"></script>
</body>
</html>