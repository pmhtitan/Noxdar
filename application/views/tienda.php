<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>Clientes</title>
    </head>
<body>

<div id="container">
	<h1>Bienvenido, actualmente tenemos registrados a los siguientes clientes:</h1>
	<div id="body">
		<?php foreach($data as $fila): ?>
		<h3><?=$id=$fila->id?></h3>
		<p><?=$username=$fila->username?></p>
		<h3><?=$password=$fila->password?></h3>
        <p><?=$nombre=$fila->nombre?></p>
		<br />
		
		<?php endforeach;?>
		<?=
		echo ($id.'\n'.$username.'\n'.$password.'\n'.$nombre);?>
		
		
	</div>

	<p class="footer">Page renderizada in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'MierdaGniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>