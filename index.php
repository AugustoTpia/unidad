<!DOCTYPE html>
<html lang="es">

<?php include('php/header.php'); ?>

<body>
<?php

    include('php/navbar.php');

    require_once 'controllers/tacharla.Controller.php';
    require_once 'models/tacharla.Model.php';

    $dataCards = TacharlaController::getTacharlaCardC();
?>
    <div class="container" style="margin-top: 2%;">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <center><div class="carousel-inner">
                <div class="carousel-item active">
                <img src="img/UNIDAD DE GENERO-23.png" class="d-block" alt="..." width="70%">
                </div>
                <div class="carousel-item">
                <img src="img/UNIDAD DE GENERO-24.png" class="d-block" alt="..." width="70%">
                </div>
                <div class="carousel-item">
                <img src="img/UNIDAD DE GENERO-25.png" class="d-block" alt="..." width="70%">
                </div>
            </div></center>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <section id="quienes" style="padding-top: 35px">
            <div class="shadow p-3 mb-5 bg-body rounded">
                <h3 class="text-center">¿Quiénes somos?</h>
                <div class="card text-dark border-info" style="margin-top: 35px">
                    <div class="card-body">
                        <p class="fw-light fs-4" style="text-align: justify">La Unidad de Género es la instancia administrativa que se encarga de transversalizar la perspectiva de género en las políticas públicas, los bienes y los servicios que se brindan a la población, así como respetar, promover y difundir el ejercicio de los derechos humanos, así como acciones que propicien la igualdad de oportunidades entre mujeres y hombres, la no discriminación de personas.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="taller" style="padding-top: 35px">
            <div class="shadow p-3 mb-5 bg-light rounded">
                <h3 class="text-center">Talleres y Charlas</h>
                <div class="col-md-12 row">
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                    <?php
                        foreach($dataCards as $key => $value){

                            if($value["activo"] == 1){
                            echo '<div class="col">
                                    <div class="card">
                                        <img src="views/admin/img/talleres/'.$value["imagen"].'" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-title fs-4" >'.$value["titulo"].'</p><hr>
                                            <p class="card-text fs-5 fw-light" style="text-align: justify">'.$value["texto"].'</p>
                                        </div>
                                    </div>
                                </div>';
                            }

                        }

                    ?>
                    </div>
                </div>
            </div>
        </section>
        <section id="conver">
                <div class="shadow p-3 mb-5 bg-body rounded">
                    <h3 class="text-center">Conversatorios</h>
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card" style="margin-top: 30px">
                                <div class="card-header">
                                    <a href="https://www.facebook.com/watch/?v=1578981215594293"><img src="img/UNIDAD DE GENERO-25.png" class="card-img-top" alt="..."></a>
                                
                                </div>
                                <div class="card-body">
                                    <p class="card-text fs-5 fw-light" style="text-align: justify">Conversatorio <i>#DíaNaranja. Trabajo de cuidados</i>, con Alicia M. Herrerías, Fernanda Medina y Alejandra Méndez Hernández Palacios</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="margin-top: 30px">
                             <div class="card-header">
                                    <a href="https://www.facebook.com/IVECoficial/videos/711533416290023"><img src="img/UNIDAD DE GENERO-25.png" class="card-img-top" alt="..."></a>
                                
                                </div>
                                <div class="card-body">
                                    <p class="card-text fs-5 fw-light" style="text-align: justify">Presentación editorial <i>La ruptura no será televisada</i>, de Mana Muscarsel Isla.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="margin-top: 30px">
                                <div class="card-header">
                                    <a href="https://www.facebook.com/watch/?v=3283904038363545"><img src="img/UNIDAD DE GENERO-25.png" class="card-img-top" alt="..."></a>
                                
                                </div>
                                <div class="card-body">
                                    <p class="card-text fs-5 fw-light" style="text-align: justify">Conversatorio <i>Adictas a la insurgencia</i>, con Celia del Palacio Montiel y Alexia Ávalos.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="margin-top: 30px">
                                <div class="card-header">
                                    <a href="https://www.facebook.com/watch/?v=3650269958399103"><img src="img/UNIDAD DE GENERO-25.png" class="card-img-top" alt="..."></a>
                                
                                </div>
                                <div class="card-body">
                                    <p class="card-text fs-5 fw-light" style="text-align: justify">Conversatorio <i>“Memoria y utopía en la literatura contra los feminicidios”</i>, con Gabriela Damián Miravete y Marcela Osorno Guerra.</p>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
        </section>
        <section id="newsl">
            <div class="shadow p-3 mb-5 bg-light rounded">
                <h3 class="text-center">Newsletter</h>
                <hr>
                <p class="fs-6"style="text-align: justify" >¡Hagamos Tribu! es una publicación electrónica mensual, que promueve contenidos culturales y académicos en materia de igualdad. Te invitamos a revisar las ediciones anteriores:  </p>
                <hr>
                <img style="cursor:pointer" src="img/UNIDAD DE GENERO-25.png" class="img-fluid" alt="..." width="70%" data-bs-toggle="modal" data-bs-target="#newsLetter">
            </div>
        </section>
        <section id="prensa">
            <div class="shadow p-3 mb-5 bg-body rounded">
                <h3 class="text-center">Prensa</h><hr>
                <img style="cursor:pointer" src="img/UNIDAD DE GENERO-25.png" class="img-fluid" alt="..." width="70%" data-bs-toggle="modal" data-bs-target="#prensaA">
                
            </div>
        </section>
        <section id="contac">
            <div class="shadow p-3 mb-5 bg-light rounded">
                <h3 class="text-center">Contacto</h>
                <hr>
                <div class="row col-md-12">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6">
                        <form>
                            <div class="form-floating mb-3 fs-6">
                                <input type="text" id="nombre" class="form-control" placeholder="Nombre completo">
                                    <label for="floatingInput">Nombre</label>
                                </div>
                                <div class="form-floating mb-3 fs-6">
                                    <input type="text" id="tel" class="form-control" placeholder="Password">
                                    <label for="floatingPassword">Teléfono</label>
                                </div>
                                <div class="form-floating mb-3 fs-6">
                                    <input type="mail" id="mail" class="form-control" placeholder="Email">
                                    <label for="floatingInput">Email</label>
                                </div>
                                <div class="form-floating mb-3 fs-6">
                                    <textarea class="form-control" id="comen" style="height: 270px;" placeholder="Comentarios..."></textarea>
                                    <label for="floatingTextarea">Comentarios</label>
                                </div>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-primary" type="button" id="env" onclick="javascript:envio();">Enviar</button>
                                </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </section>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- Footer -->
    <footer style="background-color: #3d3d3d;font-size:10px; bottom: 0;width: 100%;">
        <div class="">
            <br>
            <div class="row col-lg-12">
                <div class="col-md-3">
                    <ul class="list-inline">
                        <!--social-buttons-->
                        <li class="list-inline-item">
                            <a href="https://twitter.com/IVEC_Oficial">
                                <i class="fab fa-twitter btn-lg" style="color: white"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/IVECoficial/">
                                <i class="fab fa-facebook-f btn-lg" style="color: white"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.youtube.com/IVECoficial">
                                <i class="fab fa-youtube btn-lg" style="color: white"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/ivecoficial">
                                <i class="fab fa-instagram btn-lg" style="color: white"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-2" style="text-align: left;">
                    <ul style="list-style: none;">

                        <li>
                            <a href="views/gestor" style="color: rgb(253, 252, 252)" target="_blank">
                                <b>G</b>estor de contenido</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3" style="text-align: left;">
                    <ul style="list-style: none;">

                        <li>
                            <a href="views/otro/" style="color: rgb(253, 252, 252)" data-toggle="modal" data-target="#manuales"><b>E</b>jemplo
                                <b>E</b>jemplo</a>
                        </li>
                        

                    </ul>
                </div>
                <div class="col-md-4">
                    <div style="text-align: left">

                        <li class="list-inline-item" style="color: white">
                            Instituto Veracruzano de la Cultura<br>
                            Sede Veracruz, Francisco Canal s/n esquina Zaragoza, Centro Histórico<br>
                            Veracruz, Ver. (229) 931 69 62</li><br>
                        <br>
                        <li class="list-inline-item" style="color: white">
                            Sede Xalapa, Xalapeños Ilustres 135, Centro Histórico<br>
                            Xalapa, Ver. (228) 818 04 12
                        </li>
                        <!--<span class="copyright" style="color: white">Copyright &copy; Your Website 2018</span>-->
                    </div>

                </div>
            </div>
        </div>


        </div>

        </div>
        <br><br>
    </footer>

<!--MOALES -->
    <div class="modal fade" id="newsLetter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Newsletter</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <u>
                    <li><a href="https://mailchi.mp/0426f4225856/tribu01-5825822?e=[UNIQID]" target="_blank">Tribu 01. Bienvenida</a></li>
                    <li><a href="https://us19.campaign-archive.com/?u=b291b1db34b334345011017ef&id=2f49f082b1" target="_blank">Tribu 02. Hablemos de cuidados</a></li>
                    <li><a href="https://us19.campaign-archive.com/?u=b291b1db34b334345011017ef&id=2f49f082b1" target="_blank">Tribu 03. Hablemos de diversidad</a></li>
                    <li><a href="https://us19.campaign-archive.com/?u=b291b1db34b334345011017ef&id=75352de400" target="_blank">Tribu 04. Hablemos de lenguaje</a></li>
                    <li><a href="https://us19.campaign-archive.com/?u=b291b1db34b334345011017ef&id=6d17c7c5da" target="_blank">Tribu 05. Hablemos de juventud y relaciones intergeneracionales</a></li>
                    <li><a href="https://us19.campaign-archive.com/?u=b291b1db34b334345011017ef&id=1933949b4d" target="_blank">Tribu 06. Hablemos de Historia y su construcción</a></li>
                </u>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="prensaA" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Prensa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <u>
                    <li><a href="http://saladeprensa.ivec.gob.mx/principal/impulsa-ivec-actividades-con-enfoque-de-genero-durante-2020/" target="_blank">Prensa 1</a></li>
                    <li><a href="http://saladeprensa.ivec.gob.mx/principal/realiza-ivec-actividades-digitales-con-perspectiva-de-genero-promoviendo-la-cultura-de-paz/" target="_blank">Prensa 2</a></li>
                    <li><a href="http://saladeprensa.ivec.gob.mx/principal/dia-naranja-para-transitar-a-una-cultura-de-paz/" target="_blank">Prensa 3</a></li>
                    <li><a href="http://saladeprensa.ivec.gob.mx/principal/durante-el-mes-de-abril-nos-quedamos-en-casa-nosvemospronto-2/" target="_blank">Prensa 4</a></li>
                    
                </u>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
            </div>
        </div>
    </div>

    <script src="js/app.js"></script>
</body>

</html>