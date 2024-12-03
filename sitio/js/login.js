$(document).ready(function () {
    $('#login').submit(function (e) {
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: '../php/autenticacion/login.php',
            data: $(this).serialize(),
            success: (response) => {
                const respuestaJson = JSON.parse(response)
                if (respuestaJson && respuestaJson.success) {
                    sessionStorage.setItem('id', respuestaJson.id);
                    sessionStorage.setItem('nombre', respuestaJson.nombre);
                    sessionStorage.setItem('apellido', respuestaJson.apellido);

                    window.location.href = "../index.php"
                } else {
                    $('#login-mensaje').html('<p>' + respuestaJson.error + '</p>');
                    $('#login-mensaje').css({
                        display: "flex"
                    });
                }
            },
            error: (err) => {
                $('#login-mensaje').html('<p>Hubo un problema al intentar procesar su solicitud: ' + error + '</p>');
                $('#login-mensaje').css({
                    display: "flex"
                });
                $('#login').css({
                    display: "none"
                });
            }
        })
    })
});