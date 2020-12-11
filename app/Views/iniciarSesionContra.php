	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/password.css">
</head>

<body style="background-color:#66d7d1">
	<div class="container align-left" style="background-color:#ffffff">
		<div>
			<div><h1 class="sesion">Iniciar sesión </h1>
				<form action="<?php echo base_url(); ?>/index.php/Usuario" name="iniciar_sesion" method="POST" role= "form" onsubmit="return validacionISC();">
				<!--	<h4 class="usu">Jose Angel <a href="#"><u style="color: blue">Cambiar</u></a> </h4>-->
						<!-- <div>
							<h5>Contraseña <a href="#"><u style="color: blue"> ¿Olvidaste tu contraseña? </u> </a></h5>
						</div>-->
						<!--Espacio para escribir contraseña-->
							<input input type="password" class="form-control" id="pwd" placeholder="Mínimo 8 caracteres">	
							<div>
								<!--Checkbox de recordar-->
								<!--<input type="checkbox" class="check form-check-input" value=""> <h7 class="rem"> Recordarme</h7>-->
							</div>
						<div>
							<!--Botón para iniciar sesión--> 
							<button type="submit" class="btn" style="background-color: #f4f188" href="<?php echo base_url(); ?>/index.php/Controlador/detalleProducto">Iniciar sesión</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>