<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex">
    <title>Noxdar | Compra</title>

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
				<li><a href="https://noxdar.com/index.php/ContactoController" id="irContacto">Contacto</a></li>
				<li><a href="https://noxdar.com/index.php/Products" id="irProductos">Productos</a></li>
				<li><a href="https://noxdar.com/index.php/HomeController" id="irHome" class="active">Novedades</a></li>
				<li class="phonenovista logoutIcon cursorpointer"><img src="/assets/img/closeWhite2.png" style="width:80px;height:80px;padding: 0px 30px 45px 10px;"></li>
				<!-- <li class="phonenovista"><img src="/assets/img/hand-arrow-left2.png" style="width:80px; height:80px; padding:0px 30px 30px 10px;"> -->
				<li class="deslogText cursorpointer">desloguearse</li>
				<li class="welcomeText cursorpointer">Bienvenido, <?php echo $nombreLog;?></li>

			</ul>
	</nav>
	</header>
<main>
<div class="backImageCheckout">
<div style="padding-top:100px"></div>
<div class="paddingCuerpo">

<h2>Estado de envío</h2>
<p class="ord-succ">Tu orden ha sido procesada correctamente.</p>

<!-- Order status & shipping info -->
<div class="row col-lg-12 ord-addr-info">
    <div class="col-sm-4 adr">
        <div class="hdr">Shipping Address</div>
        <p><?php echo $order['name']; ?></p>
        <p><?php echo $order['email']; ?></p>
        <p><?php echo $order['phone']; ?></p>
        <p><?php echo $order['address']; ?></p>
    </div>
    <div class="col-sm-4 info">
        <div class="hdr">Order Info</div>
        <p><b>Reference ID</b> #<?php echo $order['id']; ?></p>
        <p><b>Total</b> <?php echo '€'.$order['grand_total'].' EUR'; ?></p>
    </div>
</div>

<!-- Order items -->
<div class="row ord-items">
    <?php if(!empty($order['items'])){ foreach($order['items'] as $item){ ?>
    <div class="col-lg-12 item">
        <div class="col-sm-4">
            <div class="img" style="height: 75px; width: 75px;">
                <?php $imageURL = !empty($item["image"])?base_url('uploads/product_images/'.$item["image"]):base_url('assets/img/producto5.png'); ?>
                <img src="<?php echo $imageURL; ?>" width="75"/>
            </div>
        </div>
        <div class="col-sm-4">
            <p><b><?php echo $item["name"]; ?></b></p>
            <p><?php echo '€'.$item["price"].' EUR'; ?></p>
            <p>QTY: <?php echo $item["quantity"]; ?></p>
        </div>
        <div class="col-sm-4">
            <p><b><?php echo '€'.$item["sub_total"].' EUR'; ?></b></p>
        </div>
    </div>
    <?php } } ?>
</div>
</div>
</div>
</main>
    </body>
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
 
  </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="/assets/js/navbar.js"></script>
</html>