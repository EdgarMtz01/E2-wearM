<!-- Inicia barra de navegación-->
	<nav class="navbar navbar-expand-lg navbar-light">

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo01">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>/index.php/<?php echo $controlador; ?>/productosHombre">Hombre</a>
           </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>/index.php/<?php echo $controlador; ?>/productosMujer">Mujer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>/index.php/<?php echo $controlador; ?>/productosNiño">Niños</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Termina barra de navegación-->