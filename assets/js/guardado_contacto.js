$(document).ready(function() {
    $('#contacto').submit(function(e) {
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: 'contacto/guardar_contacto.php',
            data: $(this).serialize(),
            success: (response) => {
                $('#contacto-mensaje').html('<p>' + response + '</p>');
                $('#contacto-mensaje').css({
                    display: "flex"
                });
                $('#contacto').css({
                    display: "none"
                });
            },
            error: (err) => {
                $('#contacto-mensaje').html('<p>Hubo un problema al intentar procesar su solicitud: ' + error + '</p>');
                $('#contacto-mensaje').css({
                    display: "flex"
                });
                $('#contacto').css({
                    display: "none"
                });
            }
        })
    })
});