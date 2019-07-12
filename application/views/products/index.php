<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex">
    <title>Noxdar | Productos</title>

     <link href="/assets/lib/bootstrap.min.css" rel="stylesheet"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="/assets/css/estilos.css" rel="stylesheet">
	<link href="/assets/css/HomeEstilos.css" rel="stylesheet">
    <link href="/assets/css/ProductosEstilos.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Mali|Poor+Story|Roboto" rel="stylesheet">
   <!--  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
   <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
    </head>
<body>
    

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
				<li><a href="http://noxdar.com/index.php/ContactoController" id="irContacto">Contacto</a></li>
				<li><a href="http://noxdar.com/index.php/Products" id="irProductos">Productos</a></li>
				<li><a href="http://noxdar.com/index.php/HomeController" id="irHome" class="active">Novedades</a></li>
				<li class="phonenovista logoutIcon cursorpointer"><img src="/assets/img/closeWhite2.png" style="width:80px;height:80px;padding: 0px 30px 45px 10px;"></li>
				<!-- <li class="phonenovista"><img src="/assets/img/hand-arrow-left2.png" style="width:80px; height:80px; padding:0px 30px 30px 10px;"> -->
				<li class="deslogText cursorpointer">desloguearse</li>
				<li class="welcomeText cursorpointer">Bienvenido, <?php echo $nombreLog;?></li>

			</ul>
	</nav>
	</header>
<main>
<div class="backImage">
<div style="padding-top:100px;"></div>
<section class="content" id="sectionProductos">
<h2 style="color:White">Productos</h2>
	
<!-- Cart info -->
<a href="<?php echo base_url('/index.php/cart'); ?>" class="cart-link" title="View Cart">
    <i class="glyphicon glyphicon-shopping-cart"></i>
    <span>(<?php echo $this->cart->total_items(); ?>)</span>
</a>

<!-- List all products -->
<div class="row">
    <div class="col-lg-12">
    <?php if(!empty($products)){ foreach($products as $row){ ?>
        <div class="col-sm-4 col-lg-4 col-md-4 ImageHover">
            <div class="thumbnail">
                <img src="<?php echo base_url('uploads/product_images/'.$row['image']); ?>" />
                <div class="caption">
                    <h4 class="pull-right"><?php echo $row['price']; ?> €</h4>
                    <h4><?php echo $row['name']; ?></h4>
                    <p><?php echo $row['description']; ?></p>
                </div>
                <div class="atc">
                    <a href="<?php echo base_url('/index.php/products/addToCart/'.$row['id']); ?>" class="btn btn-success">
                        Añadir al carrito
                    </a>
                </div>
            </div>  
        </div>
    <?php } }else{ ?>
        <p>Product(s) not found...</p>
    <?php } ?>
    </div>
</div>
</div>
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
 
  </div>
        </main>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="/assets/js/navbar.js"></script>
</html>