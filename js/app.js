function envio() {

    let nombre = $("#nombre").val();
    let tel = $("#tel").val();
    let mail = $("#mail").val();
    let comen = $("#comen").val();

    var formDat = new FormData();
    formDat.append("nombre", nombre);
    formDat.append("tel", tel);
    formDat.append("mail", mail);
    formDat.append("comen", comen);

    const emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;

    if (emailRegex.test(mail)) {


        $.ajax({

            url: "../mailreg/mail.php",
            method: "POST",
            data: formDat,
            cache: false,
            contentType: false,
            processData: false,
            //dataType: "json",
            beforeSend: function() {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                })

                Toast.fire({
                    icon: 'success',
                    title: 'Enviando correo!'
                })
            },
            success: function(respuesta) {

                if (respuesta) {

                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Correo enviado exitosamente!',
                        showConfirmButton: false,
                        timer: 1500
                    });

                    $("#nombre").val("");
                    $("#tel").val("");
                    $("#mail").val("");
                    $("#comen").val("");
                }

            }

        });
    }

}