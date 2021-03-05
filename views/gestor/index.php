<!DOCTYPE html>
<html lang="en">

<?php 
    
    include('../../php/header.php'); 
    //.-include('../../php/csrf.php');

    require_once '../../controllers/login.Controller.php';
    require_once '../../models/user.Model.php';
    require_once '../../models/cifra_hash.php';

    
?>

<body class="h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100">
            <div class="col-sm-4 align-self-center"> 
                <div class="card" style="margin-top: 20%">
                    <center>
                        <img src="../../img/user.png" alt="..." class="rounded-circle" width="40%">
                    </center>
                        <div class="card-body">
                            <form class="needs-validation" novalidate method="post">
                                <br>
                                <hr>
                                <div class="">
                                    <label for="validationCustom01" class="form-label">Usuario</label>
                                    <input type="text" class="form-control" name="nameU" id="validationCustom01" required>
                                    <div class="invalid-feedback">
                                        El nombre de usuario debe ser llenado
                                    </div>
                                </div>
                                <br>
                                <label for="validationCustom02" class="form-label">Password</label>
                                <input type="password" class="form-control" name="passU" id="validationCustom02" required>
                                <div class="valid-feedback">
                                    Contraseña ingresada
                                </div>
                                <div class="invalid-feedback">
                                    La contraseña debe ser llenada
                                </div>
                                <input type="hidden" name="token" value="<?php echo "ddss";//echo csrf::getTokenCSRF() ?>">
                                <br>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Ingresar</button>
                                </div>
                                <?php
                                    $login = new LoginController();
                                    $login->login();
                                ?>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/login.js"></script>
</body>
</html>