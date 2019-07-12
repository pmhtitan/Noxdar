<!-- Include jQuery library -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

<script>
/* Update item quantity */
function updateCartItem(obj, rowid){
	$.get("<?php echo base_url('/index.php/cart/updateItemQty/'); ?>", {rowid:rowid, qty:obj.value}, function(resp){
		if(resp == 'ok'){
			location.reload();
		}else{
			alert('Fallo al actualizar la cesta, inténtelo de nuevo.');
		}
	});
}
</script>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex">
    <title>Noxdar | Cesta</title>

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

<h2>Shopping Cart</h2>
<div class="row cart">
    <table class="table">
    <thead>
        <tr>
            <th width="10%"></th>
            <th width="30%">Producto</th>
            <th width="15%">Precio</th>
            <th width="13%">Cantidad</th>
            <th width="20%">Subtotal</th>
            <th width="12%"></th>
        </tr>
    </thead>
    <tbody>
        <?php if($this->cart->total_items() > 0){ foreach($cartItems as $item){    ?>
        <tr>
            <td>
                <?php $imageURL = !empty($item["image"])?base_url('uploads/product_images/'.$item["image"]):base_url('assets/img/producto7.png'); ?>
                <img src="<?php echo $imageURL; ?>" width="50"/>
            </td>
            <td><?php echo $item["name"]; ?></td>
            <td><?php echo '€'.$item["price"].' EUR'; ?></td>
            <td><input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
            <td><?php echo '€'.$item["subtotal"].' EUR'; ?></td>
            <td> 
                <a href="<?php echo base_url('/index.php/cart/removeItem/'.$item["rowid"]); ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="glyphicon glyphicon-trash"></i></a>
            </td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="6"><p>Tu cesta está vacía.....</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td><a href="<?php echo base_url('/index.php/products/'); ?>" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Seguir comprando</a></td>
            <td colspan="3"></td>
            <?php if($this->cart->total_items() > 0){ ?>
            <td class="text-left">Grand Total: <b><?php echo '€'.$this->cart->total().' EUR'; ?></b></td>
            <td><a href="<?php echo base_url('/index.php/checkout/'); ?>" class="btn btn-success btn-block">Checkout <i class="glyphicon glyphicon-menu-right"></i></a></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
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