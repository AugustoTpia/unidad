function ojos(idCard, val) {

    let idC = idCard;

    $.post("ajax/visible.php", { idVal: idC, valV: val })
        .done(function(data) {
            if (data == "ok") {
                window.location = "../admin";
            }
        });

}

function lapiz(idD, img, tit, tex, lin) {

    //alert(idD + "-" + img + "-" + tit + "-" + tex);

    $(".previsualizar").attr("src", "img/talleres/" + img);
    $("#titleInputEdit").val(tit);
    $("#textoInputEdit").val(tex);
    $("#titleMEdit").html(tit);
    $("#textoMEdit").html(tex);
    $("#linkInputEdit").val(lin);
    $("#idCardTCharla").val(idD);
    $("#imgReal").val(img);

}

$("#flexSwitchCheck").change(function() {

    if ($("#flexSwitchCheck").is(":checked")) {
        $(".visual").attr("hidden", "hidden");
    } else {
        $(".visual").removeAttr("hidden");
    }

});

$("#titleInput").keyup(function() {

    let titulo = $("#titleInput").val();

    $('#titleM').html(titulo);



});


$('#textoInput').keyup(function() {

    let texto = $('#textoInput').val();

    $('#textoM').html(texto);


});


$("#titleInputEdit").keyup(function() {

    let titulo = $("#titleInputEdit").val();

    $('#titleMEdit').html(titulo);



});


$('#textoInputEdit').keyup(function() {

    let texto = $('#textoInputEdit').val();

    $('#textoMEdit').html(texto);


});



$("#imgInput").change(function() {

    var imagen = this.files[0];


    if (imagen["type"] != "image/jpeg" && imagen["type"] != "image/png") {

        $("#imgInput").val("");

        swal({
            title: "Error al subir la imagen",
            text: "¡La imagen debe estar en formato JPG o PNG!",
            type: "error",
            confirmButtonText: "¡Cerrar!"
        });

    } else if (imagen["size"] > 4000000) {

        $("#imgInput").val("");

        swal({
            title: "Error al subir la imagen",
            text: "¡La imagen no debe pesar más de 2MB!",
            type: "error",
            confirmButtonText: "¡Cerrar!"
        });

    } else {

        var datosImagen = new FileReader;
        datosImagen.readAsDataURL(imagen);

        $(datosImagen).on("load", function(event) {

            var rutaImagen = event.target.result;

            $(".previsualizar").attr("src", rutaImagen);

        })

    }
});