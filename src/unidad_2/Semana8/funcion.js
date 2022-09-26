function resultado() {

    minutosH = $('#minutosHablados').val();
    zonaC = $('#zonaClave').val();


    $.ajax({

        url: 'clases.php',
        type: 'POST',
        data: {minutosHablados:minutosH, zonaClave:zonaC},
        success: function(respuesta) {

            $('#resultado').html(respuesta);

        }


    })


}