<html>
<body>

<div class="modal fade" id="signinModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
	 <div class="modal-content">
		 <div class="modal-header">
			 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			 <h4 class="modal-title"><i class="fa fa-sign-in" aria-hidden="true"></i> Registro de usuario</h4>
		 </div>
		 <div class="modal-body">
			 <?php
			 echo '<form id="signinForm" method="get" class="form-horizontal" action="'.$dirBackend.'/Insert_usuario.php">';
			  ?>
				 <div class="form-group">
					 <label class="col-md-3 control-label">Nombre de Usuario</label>
					 <div class="col-md-7">
						<input type="text" class="form-control" name="usuario" required />
					 </div>
				 </div>
				 <div class="form-group">
					 <label class="col-md-3 control-label">Correo</label>
					 <div class="col-md-7">
						<input type="email" class="form-control" name="email" required />
					 </div>
				 </div>
				 <div class="form-group">
		 			<label class="col-md-3 control-label">Password</label>
					 <div class="col-md-7">
						 <input type="password" class="form-control" name="contrasenia" required />
					 </div>
				 </div>
				 <div class="form-group">
					 <div class="col-md-5 col-md-offset-3">
						 <button type="submit" class="btn btn-success">Registrarse</button>
					 </div>
				 </div>
			 </form>
		 </div>
	 </div>
</div>
</div>

</body>
</html>
