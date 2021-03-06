<!-- Inicia header -->
	<header class="container-fluid">
		<div class="row align-items-center">

			<!-- Logo -->
			<div class="col-lg-3 col-md-3 col-sm-3 col-3">
				<a href="<?php echo base_url(); ?>/index.php/Usuario"><img src="<?php echo base_url(); ?>/assets/images/logo.png" id="logo"></a>
		    </div>

		    <!-- Barra de búsqueda -->
		    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                <form class="md-form form-sm form-1 pl-0" action="#">
                    <div class="input-group">
                        <span class="input-group-prepend">
                        <a class="boton" href="<?php echo base_url(); ?>/index.php/Usuario/busquedaProductos" type="submit"><img src="<?php echo base_url(); ?>/assets/images/lupa.png" id="lupa"></a>
                        </span>
                        <input class="form-control my-0 py-1" type="text" placeholder="Buscar" aria-label="Search">
                    </div>
                </form>
		    </div>

		    <!-- Iconos -->
		    <div class=" col-lg-3 col-md-3 col-sm-3 col-3 d-flex align-items-center nav-item dropdown">
                <a href="<?php echo base_url(); ?>/index.php/Usuario/carritoCompras"><img src="<?php echo base_url(); ?>/assets/images/carrito.png" class="header_iconos"></a>
                <img src="<?php echo base_url(); ?>/assets/images/usuario.png" class="header_iconos">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Hola, José 
                </a>
                <div class="dropdown-menu" color>
                    <!--<a class="dropdown-item" href="#">- Mi cuenta</a>-->
                    <a class="dropdown-item" href="<?php echo base_url(); ?>/index.php/Controlador">Cerrar sesion</a></div>
		    </div>
		</div>
	</header>
	<!-- Termina header -->