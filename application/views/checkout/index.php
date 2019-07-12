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
<div class="backImageCheckout">
<div style="padding-top:100px"></div>
<div class="paddingCuerpo">

<h2>Order Preview</h2>
<div class="row checkout">
    <!-- Order items -->
    <table class="table">
    <thead>
        <tr>
            <th width="13%"></th>
            <th width="34%">Producto</th>
            <th width="18%">Precio</th>
            <th width="13%">Cantidad</th>
            <th width="22%">Subtotal</th>
        </tr>
    </thead>
    <tbody>
        <?php if($this->cart->total_items() > 0){ foreach($cartItems as $item){ ?>
        <tr>
            <td>
                <?php $imageURL = !empty($item["image"])?base_url('uploads/product_images/'.$item["image"]):base_url('assets/img/producto6.png'); ?>
                <img src="<?php echo $imageURL; ?>" width="75"/>
            </td>
            <td><?php echo $item["name"]; ?></td>
            <td><?php echo '€'.$item["price"].' EUR'; ?></td>
            <td><?php echo $item["qty"]; ?></td>
            <td><?php echo '€'.$item["subtotal"].' EUR'; ?></td>
        </tr>
        <?php } }else{ ?>
        <tr>
            <td colspan="5"><p>No hay productos en tu cesta...</p></td>
        </tr>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="4"></td>
            <?php if($this->cart->total_items() > 0){ ?>
            <td class="text-center">
                <strong>Total <?php echo '€'.$this->cart->total().' EUR'; ?></strong>
            </td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
    
    <!-- Shipping address -->
    <form class="form-horizontal" method="post">
    <div class="ship-info">
        <h4>Shipping Info</h4>
        <div class="form-group">
            <label class="control-label col-sm-2">Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" value="<?php echo !empty($custData['name'])?$custData['name']:''; ?>" placeholder="Enter name">
                <?php echo form_error('name','<p class="help-block error">','</p>'); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email" value="<?php echo !empty($custData['email'])?$custData['email']:''; ?>" placeholder="Enter email">
                <?php echo form_error('email','<p class="help-block error">','</p>'); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Phone:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="phone" value="<?php echo !empty($custData['phone'])?$custData['phone']:''; ?>" placeholder="Enter contact no">
                <?php echo form_error('phone','<p class="help-block error">','</p>'); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Address:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="address" value="<?php echo !empty($custData['address'])?$custData['address']:''; ?>" placeholder="Enter address">
                <?php echo form_error('address','<p class="help-block error">','</p>'); ?>
            </div>
        </div>
    </div>
    <div class="footBtn">
        <a href="<?php echo base_url('/index.php/cart/'); ?>" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Back to Cart</a>
        <button type="submit" name="placeOrder" class="btn btn-success orderBtn">Place Order <i class="glyphicon glyphicon-menu-right"></i></button>
    </div>
    </form>
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