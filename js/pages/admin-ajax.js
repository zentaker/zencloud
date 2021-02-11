$(document).ready(function () {
    $('#crear-admin').on('submit', function (e) {
        e.preventDefault();
        
        var datos = $(this).serializeArray();
        
        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            success: function (data) {
                var resultado = data;
                if (resultado.respuesta === 'exito') {
                    Swal.fire(
                        'Correcto',
                        'El administrador se creo corerctamente',
                        'success'
                      )
                    
                } else {
                     
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Hubo un error!',
                        footer: '<a href>Por que me da este error?</a>'
                    })
                }
            }
        })
    });

    $('#login-admin').on('submit', function (e) {
        e.preventDefault();
        
        var datos = $(this).serializeArray();
        
        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            success: function (data) {
                console.log(data);
                var resultado = data;
                if (resultado.respuesta === 'exitoso') {
                    Swal.fire(
                        'Login Correcto',
                        'Bienvenido ' + resultado.usuario + '',
                        'success'
                    ), setTimeout(function() {
                        location.href = "admin.php";
                          
                      }, 2000)
                    
                } else {
                     
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Usuario o pasword incorrecto',
                        footer: '<a href>Por que me da este error?</a>'
                    })
                }
            
            }
        })
    });
    
});