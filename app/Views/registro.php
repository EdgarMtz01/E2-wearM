	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/registrar.css">
</head>
<body style="background-color:#66d7d1">
	<div class="container" style="background-color:#ffffff">
		<!--Titulo del contenedor-->
		<h1 class="crear"> <strong>Crea tu cuenta</strong></h1>
		<form action="#" name="registrar_usuario" method="POST" role= "form" onsubmit="return validacionRC();">
			<h5 class="nom">Nombre(s)</h5>
			<input class="nombre" type="text" name="form-control-plaintext" id="nombre_cuenta">
			<div>
				<h5 class="ape">Apellidos</h5>
				<input class="apellido" type="text" name="form-control-plaintext" id="apellido_cuenta">
				<div>
					<h5>Correo electrónico</h5>
					<input class="correo" type="text" name="form-control-plaintext" id="correo_cuenta">
					<div>
						<h5>Contraseña</h5>
						<input class="password" type="password" name="form-control-plaintext" placeholder="mínimo 8 caracteres" id="password_cuenta">
						<div>
							<h5>Vuelva a escribir su contraseña</h5>
							<input class="password1" type="password" name="form-control-plaintext" placeholder="mínimo 8 caracteres" id="password1_cuenta">
							<div>
								<!--Botón para crear cuenta-->
								<button type="submit" class="btn" style="background-color: #f4f188"><strong><h5>Crear cuenta</h5></strong></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>


</body>
</html>