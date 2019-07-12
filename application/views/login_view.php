<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login Noxdar</title>
	<link href="/assets/lib/bootstrap.min.css" rel="stylesheet"> 
	<link href="/assets/css/estilos.css" rel="stylesheet">
	
    
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
					<a href="#" class="navbar-brand"><img src="/assets/img/logotipoNXGris2.png" style="padding-top: 10px"></a>
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
			
			<center>
				
				<br><table border="3" class="borderlogin" style="text-align: center; padding-right:20px" cellspacing="1">
				<tbody><tr>
					<td colspan="2" style="padding-top:20px">
				<img style="border-radius: 50%; text-align: center; align-content:center;  width: 120px; height: 120px;" src="/favicon.ico"></td>
				</tr>
				<tr>
				<td colspan="2" style="padding-top:20px">
				<img class="iccon1" src="/assets/img/avatar_icon5.png" style="margin-bottom:7px"><input type="text" class="form-control" id="username" placeholder="Usuario" style="padding-top:10px; width:70%">
				
				 <br>     
				<img class="iccon1" src="/assets/img/avatar_icon_pass5.png" style="margin-bottom:2px"><input type="password"  style="width:70%" class="form-control" id="password" placeholder="Contraseña"></td>
				</tr>
				<tr><td colspan="2" text-align:center color:blue><a href="www.google.es">¿Recuperar Password?</a></td></tr>
				<!--<a href="#" class="b_mostaza-m" id="login">entrar</a>--><tr><td class="tdbtn" bordercolor="white" colspan="2"><button id="login" class="btnentrar"><b>ENTRAR</b></button></td></tr>
				</tbody></table>
				<a href="https://www.noxdar.com/" class="enlaceWeb">Noxdar,2019</a>
				<br>					
				<br><br>
				<div id="errorLogin"></div>
			
			</center>
		</div>
	</div>
</body>
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script src="/assets/js/login.js"></script>
  <script src="/assets/js/jquery.vide.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><!--<script src="/public/assets/js/lib/jquery.dataTables.min.js" type="text/javascript"></script>-->	
	

</html>
