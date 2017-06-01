<!doctype html>
<html lang="es">
<head>
<title>dTS | Recuperar cuenta</title>
<meta charset="utf-8" />
<?php include_once('_scriptsHeader.php'); ?>
</head>
<body>
	<?php include_once('settings.php'); ?>
	<?php include_once('_header.php');	?>
	<?php	include_once('_login.php'); ?>
	<?php	include_once('_registrarUsuario.php'); ?>
	<?php	include_once('_menuSocial.html'); ?>

<!-- TODO EL CODIGO PRINCIPAL -->
<main class="container">
<h2>Recuperar cuenta</h2>
<hr>
	<form name="frm-recordarcontrasenia" method="POST" action="#" class="frm-servicio">
	<div class="form-group">
		Correo:
		<input type="text" required name="Correo" maxlength="35" class="form-control">
		Nueva Clave:
		<input type="password" required name="NuevaClave" maxlength="25" class="form-control">
		Confirmar clave:
		<input type="password" required name="ConfirmarClave" maxlength="25" class="form-control"><br>
		<input type="submit" value="Ingresar" class="btn btn-primary">
		<input type="reset" value="Limpiar" class="btn btn-default">
	</div>
	</form>
<div style="width: 100%; height: 100px;"></div>
</main>
<?php include_once('_footer.html'); ?>
</body>
<?php include_once('_scriptsFooter.php') ?>
</html>
