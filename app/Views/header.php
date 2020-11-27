<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wearM</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Inicia header -->
    <header class="container-fluid">
        <div class="row align-items-center">
            <!-- Logo -->
            <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                <a href="index.html"><img src="assets/images/logo.png" id="logo"></a>
            </div>
            <!-- Barra de búsqueda -->
            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                <form class="md-form form-sm form-1 pl-0" action="#">
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <button type="submit" class="boton"><img src="assets/images/lupa.png" id="lupa"></button>
                        </span>
                        <input class="form-control my-0 py-1" type="text" placeholder="Buscar" aria-label="Search">
                    </div>
                </form>
		    </div>

            <!-- Iconos -->
            <div class=" col-lg-3 col-md-3 col-sm-3 col-3 d-flex justify-content-center">
                <a href="#"><img src="assets/images/carrito.png" class="header_iconos"></a>
                
                <div class="dropdown">
                    <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/usuario.png" class="header_iconos"></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="inicioSesion.html">Iniciar sesión</a>
                        <a class="dropdown-item" href="pantallaRegistrarse.html">Registrarse</a>
                    </div>
                </div>

            </div>
        </div>
    </header>
	<!-- Termina header -->