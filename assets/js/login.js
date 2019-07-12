$(document).ready(function() {
   $('.btnentrar').on("click",function(){
       username = $('#username').val();
       password = $('#password').val();
    $.ajax({
		url:'/controllers/welcome/holi',
		type: 'POST',
        data: {username: username,
               password: password},
		dataType: 'json',
		success: function(datos) {
			console.log(datos);
			
		},
		error: function(jqXHR, textStatus, error) {
			alert('Hubo un fallo con la conexión de datos');
		}
	});
   });
  });

