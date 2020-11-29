            <div class="container-fluid table-responsive mt-5">
                <form action="#" name="agregar_venta" method="POST" role= "form" onsubmit="return validacionAV();">
        		<div class="row justify-content-center">
                    <div class="col-lg-4 col-md-5 col-sm-8 col-10">
                        <div class="form-group d-flex d-inline-block align-items-center">
                            <label for="cliente_venta" class="mb-0 ml-2 mr-3">Cliente</label>
                            <select id="cliente_venta" class="form-control">
                                <option selected>Ninguno</option>
                                <option>cliente1</option>
                                <option>cliente2</option>
                            </select>
                        </div>     
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-8 col-10">
                        <div class="form-group d-flex d-inline-block align-items-center">
                            <label for="fecha" class="mb-0">Fecha</label>
                            <input type="date" class="form-control ml-3" id="fecha_venta">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-7 col-sm-8 col-8 ml-auto">
                    <div class="form-group float-right mr-4">
                        <label class="mr-2">Productos</label>
                        <a href="#" class="btn btn-success">
                            <i class="fa fa-plus-square fa-lg mr-2" aria-hidden="true"></i>Agregar
                        </a>
                    </div>  
                    </div>
                </div>

                <!-- Tabla de productos -->
      	    	<table class="table table-bordered table-hover text-center mt-2">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nombre</th>
                            <th>Cantidad</th>
                            <th>Talla</th>
                            <th>Descuento</th>
                            <th>Precio</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Acciones</button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Editar</a>
                                        <a class="dropdown-item" href="#">Eliminar</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Acciones</button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Editar</a>
                                        <a class="dropdown-item" href="#">Eliminar</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Acciones</button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Editar</a>
                                        <a class="dropdown-item" href="#">Eliminar</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="row mt-4">
                    <div class="col-12">
                        <div class="form-group float-right mr-4">
                            <label for="total">Total: $</label>
                            <input type="text" disabled value="00.00" oncopy="return false;" id="total">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success float-right mr-4">Confirmar</button>
            </form>
      		</div>
    	</div>
    	<!--/Termina contenido de la página  -->
	</div>

    <!-- Ocultar menu lateral -->
    <script type="text/javascript">
      $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
      });
    </script>

</body>
</html>