<!doctype html>
<html lang="es">
<head>
	<title>dTS | Inicio</title>
	<meta charset="utf-8" />
	<?php include_once('_scriptsHeader.html'); ?>
</head>
<body>
	<?php include_once('_header.html');	?>
	<?php	include_once('_login.html'); ?>
	<?php	include_once('_menuSocial.html'); ?>
	<?php	include_once('_registrarUsuario.html'); ?>

<!-- TODO: EL CODIGO PRINCIPAL -->
<main class="container">
<h2><i class="fa fa-home"></i> Home         </h2>
<h3>Nuestros servicios</h3>
<hr/>
	<table width="100%">
				<tr>
					<td width="15%">
						<img src="img/mantenimiento.png" width="150" height="120">
					</td>
					<td width="35%">
						Si lo que buscas es evitar que tus dispositivos se dañen antes de que termine su vida util, estas en el mejor sitio de la web.
						<br /><a href="servicios/mantenimiento.html" class="btn btn-success">Saber más</a>
					</td>
					<td>
						<img src="img/configuracion.png" width="150" height="120">
					</td>
					<td>
						Tu equipo anda mal, pues dejanos hecharle un vistazo, contamos con los mejores profesionales, seguro que resolvemos tus problemas.
						<br /><a href="servicios/diagnostico.html" class="btn btn-success">Saber más</a>
					</td>
				</tr>
				<tr>
					<td width="15%">
						<img src="img/diagnostico.png" width="150" height="120">
					</td>
					<td width="35%">
						Realizamos una evaluación de rendimiento a tus dispositivos, y te ayudamos a mejorar esas partes de tu equipo de trabajo, para tener control sobre tu estabilidad y rendimiento.
						<br /><a href="servicios/diagnostico.html" class="btn btn-success">Saber más</a>
					</td>
					<td>
						<img src="img/asistencia.png" width="150" height="120">
					</td>
					<td>
						¿No encuentras especificamente tu necesidad? Llámanos, un profesional te asistirá, seguramente es lo que necesitas, no esperes más.
						<br /><a href="servicios/asistencia.html" class="btn btn-success">Saber más</a>
					</td>
				</tr>
				<tr>
					<td>
						<img src="img/instalacion.png" width="150" height="120">
					</td>
					<td>
						¿Estas buscando software nuevo para tu equipo? Cuanta con nosotros, contamos con multiples tiendas en linea para que tu te hagas de los mejores programas al mejor precio.
						<br /><a href="servicios/instalacion.html" class="btn btn-success">Saber más</a>
					</td>
					<td colspan="2" align="center">
					<a href="preguntas.html" class="btn btn-default">Preguntas frecuentes</a>
					<a href="opinion.html" class="btn btn-default">Danos tu opinión</a>
					</td>
				</tr>
			</table>
			<div style="width: 100%; height: 100px;"></div>
</main>
<?php include_once('_footer.html'); ?>
</body>
<?php include_once('_scriptsFooter.html') ?>
</html>
