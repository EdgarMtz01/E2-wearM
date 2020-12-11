	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/login.css">
</head>

<body style="background-color:#66d7d1">
	<div class="container" style="background-color:#ffffff">
		<div>
			<div>
				<h1>Iniciar sesión </h1>
				<form action="<?php echo base_url(); ?>/index.php/Controlador/inicioSesionPassword" method="POST" role= "form" onsubmit="return validacionIS();">
					<h4 class="crr">Correo electronico </h4>
					<input class="Correo" type="email" name="correo_inicio" id="correo_inicio">
					<div>
						<button type="submit" class="btn" style="background-color: #f4f188">Continuar</button>
						<div>
						<!--	<a href="#">
								<small class="sm" style="color: blue"> >¿Necesitas ayuda?</small>
							</a>-->
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div>
	<!--	<p style="color:#707b7c" align="center"> <strong>¿Aun no estas registrado(a)?</strong></p>-->
		</div>
		<div align="center">
			<a href="<?php echo base_url(); ?>/index.php/Controlador/registroUsuario" class="btn" style="background-color:#d5d5d5" >Crear cuenta</a> 
		</div>


</body>
</html>

