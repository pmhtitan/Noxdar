$(document).ready(function(){
	//PRUEBA LISTAR PRODUCTOS 9
    $.ajax({
		url: '/index.php/HomeController/getProductos',
		type: 'POST',
		data: 0,
		dataType: 'json',
		beforeSend: function() {
			
		},
		success: function(datos) {
         console.log('Conexion ajax productos-data correcta');
			console.log(datos);
			contenido ='';
			datitos = JSON.stringify(datos);
			var jsonObj = JSON.parse(datitos);
			for (var i = 0; i < jsonObj.length; i++)
			 {
				/* contenido += '<div class="row">'; */
				contenido += '<div class="col-sm-4 cajaProducto">';
				contenido += '<div class="separacion">';
				contenido +=  	'<div class="producto-img"><img class="controlSizeImagen" src="/assets/img/'+jsonObj[i]['image']+'"/></div>';	
				contenido +=  	'<div class="producto-name">'+jsonObj[i]['name']+'</div>';
				contenido +=  	'<div class="producto-desc">'+jsonObj[i]['description']+'</div>';
				contenido +=  	'<div class="producto-precio">'+jsonObj[i]['price']+'€</div>';
				/* contenido +=  	'<div class="producto-stock">Stock: '+jsonObj[i]['stock']+'</div>';	 */
				/* contenido += '<button id="'+jsonObj[i]['id']+'" class="btn btn-carrito">Añadir al carrito</button>'; */
				 contenido +=  '</div>';	 
				 contenido += '</div>';
				 
			}
			$('div.row').html(contenido);
		},
		error: function(jqXHR, textStatus, error) {
			alert('Hubo un fallo con la conexión de datos');
		}
	});
///// PRUEBA SLIDER LISTAR PRODUCTOS ULTIMOS 3
	$.ajax({
		url: '/index.php/HomeController/get4Productos',
		type: 'POST',
		data: 0,
		dataType: 'json',
		beforeSend: function() {
			
		},
		success: function(datos) {
         console.log('Conexion ajax productos4-data correcta');
			console.log(datos);
			contenido ='';
			$soloElPrimero = 0;
			datitos4 = JSON.stringify(datos);
			var jsonObj4 = JSON.parse(datitos4);
			for (var i = 0; i < jsonObj4.length; i++)
			{
				if($soloElPrimero ==0){
					contenido += 	'<div class="item active">';
					contenido += 		'<div class="col-sm-6 col-md-offset-3 cajaProducto">';
					contenido += 			'<div class="separacion">';
					contenido += 				'<div class="producto-img">';
					contenido += 					'<img class="controlSizeImgSlider" src="/assets/img/'+jsonObj4[i]['image']+'"/>';
					contenido += 				'</div>';
					contenido += 				'<div class="productoSlider-name">'+jsonObj4[i]['name']+'</div>';
					contenido += 				'<div class="productoSlider-desc">'+jsonObj4[i]['description']+'</div>';
					contenido += 				'<div class="productoSlider-precio">'+jsonObj4[i]['price']+'€</div>';
				/* 	contenido += 				'<div class="productoSlider-stock">Stock: '+jsonObj4[i]['stock']+'</div>'; */
					/* contenido += 				'<button id="btn-carrito" class="btn btn-carrito">¡Lo quiero!</button>'; */
					contenido += 			'</div>';
					contenido += 		'</div>';
					contenido += 	'</div>';
					
					$soloElPrimero++;
				}else{
					contenido += 	'<div class="item">';
					contenido += 		'<div class="col-sm-6 col-md-offset-3 cajaProducto">';
					contenido += 			'<div class="separacion">';
					contenido += 				'<div class="producto-img">';
					contenido += 					'<img class="controlSizeImgSlider" src="/assets/img/'+jsonObj4[i]['image']+'"/>';
					contenido += 				'</div>';
					contenido += 				'<div class="productoSlider-name">'+jsonObj4[i]['name']+'</div>';
					contenido += 				'<div class="productoSlider-desc">'+jsonObj4[i]['description']+'</div>';
					contenido += 				'<div class="productoSlider-precio">'+jsonObj4[i]['price']+'€</div>';
					/* contenido += 				'<div class="productoSlider-stock">Stock: '+jsonObj4[i]['stock']+'</div>'; */
				/* 	contenido += 				'<button id="btn-carrito" class="btn btn-carrito">¡Lo quiero!</button>'; */
					contenido += 			'</div>';
					contenido += 		'</div>';
					contenido += 	'</div>';
					
				
				}

				
			}
			$('.carousel-inner').html(contenido);
		},
		error: function(jqXHR, textStatus, error) {
			alert('Hubo un fallo con la conexión de datos');
			console.log(jqXHR);
			console.log(textStatus);
			console.log(error);
			
		}
		
	});

	/* animación DOWN ARROW SCROLL to novedades productos */
	$('#arrowDiv').click(function() {
		$('html,body').animate(
			{
			scrollTop:$('#sectionProductos').offset().top
			},
		'slow'
		)
	})

	/* POPUP INVITADO */

	jQuery('.toast__close').click(function(e){
    e.preventDefault();
    var parent = $(this).parent('.toast');
    parent.fadeOut("slow", function() { $(this).remove(); } );
  });
}) 
