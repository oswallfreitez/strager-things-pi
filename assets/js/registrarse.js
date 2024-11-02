$(document).ready(function () {
    $('#registrarse').submit(function (e) {
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: 'autenticacion/registrarse.php',
            data: $(this).serialize(),
            success: (response) => {
                $('#registrarse-mensaje').html('<p>' + response + '</p>');
                $('#registrarse-mensaje').css({
                    display: "flex"
                });
                $('#registrarse').css({
                    display: "none"
                });
                $('#alternativa-registro').css({
                    display: "none"
                });
                $('#alternativa-registro').css({
                    display: "none"
                });

                setTimeout(function () {
                    window.location.href = "/login.php";
                }, 4000);
            },
            error: (err) => {
                $('#registrarse-mensaje').html('<p>Hubo un problema al intentar procesar su solicitud: ' + error + '</p>');
                $('#registrarse-mensaje').css({
                    display: "flex"
                });
                $('#registrarse').css({
                    display: "none"
                });
                $('#alternativa-registro').css({
                    display: "none"
                });
            }
        })
    })
});