<?php
    foreach ($products as $productos){
        $idProducto= $productos['idProducto'];
        $imagen= $productos['imagen'];
        $nombre = $productos['nombre'];
        $descripcion = $productos['descripcion'];
        //$categoria = $productos['categoria'];
        $talla = $productos['talla'];
        //$costo = $productos['costo'];
        $precio = $productos['precio'];
        //$stock = $productos['stock'];
    }
?>

<!--Inicia seccion principal-->
    <section class="container-fluid mt-4"> 
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-5 col-12 d-flex justify-content-center">
                <img src="<?php echo base_url(); ?>/assets/images/<?php echo $productos['imagen'] ?>" width="80%">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-7 col-12">
                <h3 id="text-product2"><?php echo $nombre; ?></h3>
                <h4><?php echo $descripcion; ?></h4>
                <h5>Precio: $<?php echo $precio; ?></h5>
                <h5>Talla: <?php echo $talla; ?></h5>
                <h5>Devolución: gratuita para algunos tamaños y colores</h5>
                <a class="btn btn-warning"><i class="fa fa-shopping-cart mr-3" aria-hidden="true"></i>Agregar al carrito</a>
            </div>
        </div>
    </section>
    <!--Inicia barra de informacion de producto-->
    <!--<div class="mt-3 ml-3">
    <h2 class="text-center" id="title-product">Lacoste Bayliss - Zapatillas Deportivas para Hombre</h2>-->
    <!--Carousel movil-->
    <!--<div class="container-fluid" id="carousel_mov">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <a class="carousel-control-prev" href="#carouselExampleIndicators" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php //echo base_url(); ?>/assets/images/lacoste1.png" class="d-block w-100" style="height: 300px;" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php //echo base_url(); ?>/assets/images/lacoste2.png" class="d-block w-75" style="height: 300px;" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php //echo base_url(); ?>/assets/images/lacoste3.png" class="d-block w-75" style="height: 300px;" alt="...">
                </div>
            </div>
        </div>
    </div>
    <div class="row">-->
        <!--Carousel desktop-->
        <!--<div class="col" id="carousel_desk">
            <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php //echo base_url(); ?>/assets/images/lacoste1.png" class="d-block w-100" style="height: 300px;" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php //echo base_url(); ?>/assets/images/lacoste2.png" class="d-block w-50" style="height: 300px;" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php //echo base_url(); ?>/assets/images/lacoste3.png" class="d-block w-75" style="height: 300px;" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators1" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators1" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>-->
        <!--Inicia informacion de producto-->
        <!--<div class="col">
            <h2 id="text-product2">Lacoste Bayliss - Zapatillas Deportivas para Hombre</h2>
            <h3>4.6 de 5 estrellas</h3>
            <h3>Precio: $1,390.14 - $4,373.55</h3>
            <p>Devolución: gratuita para algunos tamaños y colores</p>
            <p>Medida: se ajustan a la talla marcada</p>
            <div class="container">
                <div class="dropdown" id="dropdown2">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tamaño
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">CH</a>
                        <a class="dropdown-item" href="#">M</a>
                        <a class="dropdown-item" href="#">G</a>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="dropdown" id="dropdown22">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Color
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Azul oscuro</a>
                        <a class="dropdown-item" href="#">Negro action</a>
                        <a class="dropdown-item" href="#">Café</a>
                    </div>
                </div>
            </div>
        </div>-->
        <!--Agregar a carrito-->
        <!--<div class="col">
            <h3>Agregar al carrito</h3>
            <a href="#" title="Carrito">
                <img src="<?php //echo base_url(); ?>/assets/images/carrito.png" alt="" id="carrito" width="100px">
            </a>
        </div>
    </div>
    </div>-->
    <!--Inicia barra de productos relacionados-->
    <!--<div class="text-center mt-4">
        <h3>Productos relacionados</h3>
    </div>
    <div class="row">
        <div class="col">
            <img src="<?php //echo base_url(); ?>/assets/images/dc1.png" alt="" class="img-fluid">
        </div>
        <div class="col">
            <img src="<?php //echo base_url(); ?>/assets/images/dcred1.png" alt="" class="img-fluid">
        </div>
        <div class="col">
            <img src="<?php //echo base_url(); ?>/assets/images/lacosteBrown.png" alt="" class="img-fluid">
        </div>
    </div>-->
    <!--Inicia barra de cometarios-->
    <div class="container mt-4">
        <nav id="navbar-example2" class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <h3>Comentarios</h3>
            </a>
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link" href="#fat">@Edgar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#mdo">@Jose</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#one">@Juan</a>
                        <a class="dropdown-item" href="#two">@Alex</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#three">@Iris</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
            <h4 id="fat">@Edgar</h4>
            <p>Muy bonitos tenis, los compre para un regalo, y ¡¡Le gustarón mucho!!. Super bien todo, la entrega fue un día antes de lo estimado, todo llegó en orden y en buen estado, definitivamente, volveria a comprarlos</p>
            <h4 id="mdo">@Jose</h4>
            <p>Excelente producto</p>
            <h4 id="one">@Juan</h4>
            <p>Muy comodos</p>
            <h4 id="two">@Alex</h4>
            <p>Increible</p>
            <h4 id="three">@Iris</h4>
            <p>Buen servicio de entrega</p>
        </div>
    </div>