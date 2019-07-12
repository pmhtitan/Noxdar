<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Entra y conoce Noxdar, mi propio proyecto web. Lo que empezó como una simulación de una tienda online está evolucionando, la alimento y crece conforme mis habilidades poco a poco, hacia nuevos horizontes.">
  <meta name="keywords" content="Noxdar,desarrollo web,proyecto,HTML,CSS,PHP,Javascript">
  <meta name="author" content="Pablo Moras">
    <title>Noxdar | Tu tienda online</title>

		 <link href="/assets/lib/bootstrap.min.css" rel="stylesheet">
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		 <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="/assets/css/estilos.css" rel="stylesheet">
	<link href="/assets/css/HomeEstilos.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Mali|Poor+Story|Roboto" rel="stylesheet">
   <!--  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
   <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
    </head>
<body>
    
<!-- NAVBAR 2 TEST VERSION -->
 <!-- <header>
 <div id="navbar">
		<div class="logo"><img src="/assets/img/logotipoNXGris2.png"></div>
		<nav>
			<ul>
				<li><a href="/">Home</a></li>
				<li><a href="/index.php/home/about">About</a></li>
				<li class="sub-menu"><a href="">Services</a>
					<ul>
						<li><a href="">Link 1</a></li>
						<li><a href="">Link 2</a></li>
						<li><a href="">Link 3</a></li>
						<li><a href="">Link 4</a></li>
					</ul>
				</li>
				<li><a href="">Team</a></li>
				<li class="sub-menu"><a href="">Portfolio</a>
                  	<ul>
						<li><a href="">Link 1</a></li>
						<li><a href="">Link 2</a></li>
						<li><a href="">Link 3</a></li>
						<li><a href="">Link 4</a></li>
					</ul>
				</li>
				<li><a href="">Contact</a></li>
			</ul>
		</nav>
		<div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>
		</div>
</header> -->
<header>
 <div class="responsive-bar">
	<div class="logo cursorpointer">
		<img src="/assets/img/logotipoNXGris3.png">
	</div>
	<div class="menu">
	<h4>Menu</h4>
	</div>

</div> 
	<nav>
		<div class="logo cursorpointer">
			<img src="/assets/img/logotipoNXGris3.png">
			</div>
			<ul>
				<li><a href="https://noxdar.com/index.php/ContactoController" id="irContacto">Contacto</a></li>
				<li><a href="https://noxdar.com/index.php/Products" id="irProductos">Productos</a></li>
				<li><a href="https://noxdar.com/index.php/HomeController" id="irHome" class="active">Novedades</a></li>
				<li class="phonenovista logoutIcon cursorpointer"><img src="/assets/img/closeWhite2.png" style="width:80px;height:80px;padding: 0px 30px 45px 10px;"></li>
				<!-- <li class="phonenovista"><img src="/assets/img/hand-arrow-left2.png" style="width:80px; height:80px; padding:0px 30px 30px 10px;"> -->
				<li class="deslogText cursorpointer">desloguearse</li>
				<li class="welcomeText cursorpointer">Bienvenido, <?php echo $nombreLog;?></li>

				<!-- POPUP INVISIBLE -->>
<!-- $nombreLog==null || $nombreLog == "" ||  -->


			</ul>
	</nav>
	</header>
	<main>
	<section class="sec1">
	<div class="contenedorSlider paddingTopSlider">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
		
	</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
	</div>
	<div class="toast__container" id="toastVisible">
<div class="toast__cell">

<div class="toast toast--blue add-margin">
 
  <div class="toast__icon">
<svg version="1.1" class="toast__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
<g>
	<g id="info">
		<g>
			<path d="M10,16c1.105,0,2,0.895,2,2v8c0,1.105-0.895,2-2,2H8v4h16v-4h-1.992c-1.102,0-2-0.895-2-2L20,12H8     v4H10z"></path>
			<circle cx="16" cy="4" r="4"></circle>
		</g>
	</g>
</g>

    </svg>
  </div>
  <div class="toast__content" >
    <p class="toast__type">¡Modo invitado!</p>
    <p class="toast__message">Has accedido en modo invitado, si quieres que te guardemos los datos, logeate de nuevo con tu cuenta.</p>
  </div>
  <div class="toast__close">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.642 15.642" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 15.642 15.642">
  <path fill-rule="evenodd" d="M8.882,7.821l6.541-6.541c0.293-0.293,0.293-0.768,0-1.061  c-0.293-0.293-0.768-0.293-1.061,0L7.821,6.76L1.28,0.22c-0.293-0.293-0.768-0.293-1.061,0c-0.293,0.293-0.293,0.768,0,1.061  l6.541,6.541L0.22,14.362c-0.293,0.293-0.293,0.768,0,1.061c0.147,0.146,0.338,0.22,0.53,0.22s0.384-0.073,0.53-0.22l6.541-6.541  l6.541,6.541c0.147,0.146,0.338,0.22,0.53,0.22c0.192,0,0.384-0.073,0.53-0.22c0.293-0.293,0.293-0.768,0-1.061L8.882,7.821z"></path>
</svg>
  </div>


</div></div></div></section>

<script>

	var nombreLog = '<?php echo $nombreLog;?>';

	if(nombreLog !='invitado'){
		$('#toastVisible').attr('style','display:none;');
		console.log('entra');
		console.log($('#toastVisible'));
	}

	</script>
	
<div class="contenedorArrow">
  <div class="contArrow cursorpointer" id="arrowDiv">
    <p></p>
    <svg id="more-arrows">
      <polygon class="arrow-top" points="37.6,27.9 1.8,1.3 3.3,0 37.6,25.3 71.9,0 73.7,1.3 "/>
      <polygon class="arrow-middle" points="37.6,45.8 0.8,18.7 4.4,16.4 37.6,41.2 71.2,16.4 74.5,18.7 "/>
      <polygon class="arrow-bottom" points="37.6,64 0,36.1 5.1,32.8 37.6,56.8 70.4,32.8 75.5,36.1 "/>
    </svg>
  </div>
</div>

	<section class="content" id="sectionProductos">
		<!-- div#productoSlider -->
		<!-- <div id="productoSlider"></div> -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">	
					<!-- <div class="contenedorProductos container-fluid" style="display:inline-block;"> -->
			
					</div>
				
				
			</div>
		</div>
	<center><h1>¡Conoce nuestras novedades!<h1></center>
		<center><h2>¿Buscas productos de calidad a un precio asequible? ¿Estás cansado de esperar a que repongan los productos en las tiendas físicas? Ésta es tu tienda, somos una tienda online, Somos Noxdar.</p></center>
</section>
	<section class="sec2">

	</section>
	<section class="sec3">

</section>
				
				
<!-- <main class="container-fluid"> -->
<!--FIN NAVBAR 2 TEST VERSION -->




<center><b>Pablo Moras Hernando -- Noxdar 2019 ©</b></center>
</main>

</body>

 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--<script src="/public/assets/js/lib/jquery.dataTables.min.js" type="text/javascript"></script>-->
<script src="/assets/js/navbar.js"></script>
<script src="/assets/js/homeJS.js"></script>

</html>