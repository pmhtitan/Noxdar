/* function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
} */

/* NAVBAR 2 TEST VERSION  */
/* $(document).ready(function(){
    $('.menu-toggle').click(function(){
        $('nav').toggleClass('active')
    })

    $('ul li').click(function(){
        $(this).siblings().removeClass('active');
        $(this).toggleClass('active');
    })
}) */

$(window).on('scroll', function(){
    if($(window).scrollTop()){
       $('nav').addClass('black');
    }
    else
    {
        $('nav').removeClass('black');
    }
})
 $(document).ready(function(){
     $('.logo').on("click",function(){
        location.href="https://noxdar.com/index.php/login/enter";
     })
      $('.logoutIcon').on("click",function(){
        location.href="https://noxdar.com/index.php/login/logout";
     })
     $('.deslogText').on("click",function(){
        location.href="https://noxdar.com/index.php/login/logout";
     })
     
      $(".menu h4").click(function(){
        $("nav ul").toggleClass("active")
    });  
    $(document).on('click','ul li', function(){
        $(this).addClass('active').siblings().removeClass('active')
    })


    //CONTACTO, PRODUCTOS, HOME // da problemas con el href y '#'
    /* $('#irContacto').on("click",function(){
        location.href="http://noxdar.com/index.php/ContactoController";
     })
     $('#irProductos').on("click",function(){
        location.href="http://noxdar.com/index.php/ProductosController";
     })
     $('#irHome').on("click",function(){
        location.href="http://noxdar.com/index.php/HomeController";
     }) */

 
 })
    /* $(document).on('click', '#irContacto',function(){
        $.ajax({
            url: '/index.php/ContactoController',
            type: 'POST',
            data: 0,
            dataType: 'json',
            beforeSend: function() {
                
            },
            success: function() {
                location.href="http://noxdar.com/index.php/login/contacto";
             console.log('redireccionado a Contacto correctamente');
 
            },
            error: function(jqXHR, textStatus, error) {
                alert('Hubo un fallo con la conexión de datos');
                console.log('Error al redireccionar a contacto')
            }
        });
    })
    $(document).on('click', '#irProductos',function(){
        $.ajax({
            url: '/index.php/ProductosController',
            type: 'POST',
            data: 0,
            dataType: 'json',
            beforeSend: function() {
                
            },
            success: function() {
                location.href="http://noxdar.com/index.php/login/productos";
            console.log('redireccionado a Productos correctamente');
                 
            },
            error: function(jqXHR, textStatus, error) {
                alert('Hubo un fallo con la conexión de datos');
                console.log('Error al redireccionar a productos')
            }
        });
    })
    $(document).on('click', '#irHome',function(){
        $.ajax({
            url: '/index.php/HomeController',
            type: 'POST',
            data: 0,
            dataType: 'json',
            beforeSend: function() {
                
            },
            success: function() {
                console.log('redireccionado a Home correctamente')
            },
            error: function(jqXHR, textStatus, error) {
                alert('Hubo un fallo con la conexión de datos');
                console.log('Error al redireccionar a home')
            }
        });
    }) */



