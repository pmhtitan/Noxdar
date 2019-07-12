<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bienvenido a Noxdar</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="/assets/lib/bootstrap.min.css" rel="stylesheet"> 
	<link href="/assets/css/estilos.css" rel="stylesheet">
	<!-- <link href="/assets/lib/bootstrapJS/bootstrap.bundle.js" rel="stylesheet">
	<link href="/assets/lib/bootstrapJS/bootstrap.min.js" rel="stylesheet"> -->
	
    
    </head>
<body data-vide-bg="TIMELAPSE4">

<header class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<nav class="navbar navbar-default">
				<div class="navbar-header">
					<!--<button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu_superior">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>-->
					<a href="/" class="navbar-brand"><img src="/assets/img/logotipoNXGris2.png" style="padding-top: 10px" class="CenterTextMobile"></a>
				</div>
			</nav>
		</div>
	</div>
</header>
<div class="paddtop"></div>
		<main class="container-fluid">
			<div class="row">
				<div class="col-sm-1">
									</div>
				<div class="col-sm-11">
						<div class="row">
		
	<div class="col-sm-12">
	<div class="row">
		<div class="col-sm-4" ></div>
		<div class="col-sm-3 containerLogin">
        <form method="post" action="<?php echo base_url(); ?>index.php/login/login_validation"> 
			<center>
				
				<br><table border="3" class="borderlogin" style="text-align: center; padding-right:20px" cellspacing="1">
				<tbody><tr>
					<td colspan="2" style="padding-top:20px">
				<img style="border-radius: 50%; text-align: center; align-content:center;  width: 120px; height: 120px;" src="/favicon.ico"></td>
				</tr>
				<tr>
				<td colspan="2" style="padding-top:20px">
				<img class="iccon1" src="/assets/img/avatar_icon5.png" style="margin-bottom:7px"><input type="text" class="form-control" id="username" name="username" placeholder="Usuario" style="padding-top:10px; width:70%" required>
				
				 <br>     
				<img class="iccon1" src="/assets/img/avatar_icon_pass5.png" style="margin-bottom:2px"><input type="password"  style="width:70%" class="form-control" id="password" name="password" placeholder="Contraseña" required></td>
				</tr>
				<!-- <tr><td colspan="2" text-align:center color:blue><a href="www.google.es">¿Recuperar Password?</a></td></tr> --> 
				<!--<a href="#" class="b_mostaza-m" id="login">entrar</a>--><tr><td class="tdbtn" bordercolor="white" colspan="2" style="padding-top:10px;"><button id="login" class="btnentrar"><b>ENTRAR</b></button></td></tr>
				</tbody></table>
				<a href="https://www.noxdar.com/" class="enlaceWeb">Noxdar,2019</a>
				<br>					
                <br>
						<button type="button" id="botonRegistrar" class="btn btn-info btn-lg">Registrarse</button>
						</form> 
				<br>
				<form method="post" action="<?php echo base_url(); ?>index.php/login/login_invitado">
						<button type="submit" id="botonInvitado" class="botonInvitado">Entrar como invitado</button>
                </form>
                <div class="form-group">    
                     <?php  
                          echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';  
                     ?>  
                </div>  
           
				<div id="errorLogin"></div>
                <!--<span class="text-danger"><?php //echo form_error('username'); ?></span>
                 <span class="text-danger"><?php //echo form_error('password'); ?></span> -->

            </center>
            
		</div>
	</div>

<!-- Modal -->
<form method="post" action="<?php echo base_url(); ?>index.php/login/registration_validation"> 
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
		<h4 class="modal-title">¡Bienvenido nuevo usuario!</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        
        </div>
        <div class="modal-body">
       		 <div class="form-group">
  			  <label for="RegisUser">Usuario: (Requerido)</label>
   			 <input type="text" class="form-control" id="RegisUser" name="RegisUser" required>
 			 </div>
  			<div class="form-group">
    <label for="RegisPass">Contraseña: (Requerido)</label>
    <input type="password" class="form-control" id="RegisPass" name="RegisPass" required>
  </div>
  <div class="form-group">
    <label for="RegisEmail">Email de contacto:</label><br>
    <input type="email" class="form-control" id="RegisEmail" name="RegisEmail">
  </div>
  <div class="form-group">
    <label for="RegisContact">Teléfono de contacto:</label><br>
    <input type="number" class="form-control" id="RegisPhone" name="RegisPhone">
  </div>
  <div class="form-group">
    <label for="RegisAdress">¿Dónde te enviamos los envíos? Dirección:</label><br>
    <input type="text" class="form-control" id="RegisAdress" name="RegisAdress">
  </div>
        </div>
        <div class="modal-footer">
		  <button type="submit" class="btn btn-default">Registrarse</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      
    </div>
  </div>
  </form>  

  <!-- Fin de modal -->


</body>
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script src="/assets/js/jquery.vide.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --><!--<script src="/public/assets/js/lib/jquery.dataTables.min.js" type="text/javascript"></script>-->	
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="/assets/js/LoginModal.js"></script>
	

</html>
