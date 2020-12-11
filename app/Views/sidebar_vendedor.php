    <link href="<?php echo base_url(); ?>/assets/css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Barra lateral -->
        <div class="border-right" id="sidebar-wrapper">
            <div class="sidebar-heading ">
                <img src="<?php echo base_url(); ?>/assets/images/usuario.jpg" class="rounded-circle img-fluid" alt="usuario" width="50px">
                Vendedor
            </div>
            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action" id="elementos_barra">
                    <i class="fa fa-home fa-lg mr-3" aria-hidden="true"></i>Inicio</a>
                <a href="<?php echo base_url(); ?>/index.php/Vendedor/verProductos" class="list-group-item list-group-item-action" id="elementos_barra">
                    <i class="fa fa-archive mr-3" aria-hidden="true"></i>Productos</a>
                <a href="<?php echo base_url(); ?>/index.php/Vendedor/verVentas" class="list-group-item list-group-item-action" id="elementos_barra">
                    <i class="fa fa-tags mr-3" aria-hidden="true"></i>Ventas</a>
            </div>
        </div>
        <!--/Termina barra lateral -->
        <!-- Contenido de la pagina -->
        <div id="page-content-wrapper">
            <!-- Barra de navegación superior -->
            <nav class="navbar navbar-expand-lg navbar-light border-bottom">
                <button class="navbar-toggler-icon boton" id="menu-toggle"></button>
                <h5 class="ml-4 mb-0 text-dark"></h5>
            </nav>