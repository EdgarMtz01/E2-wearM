            <div class="container-fluid table-responsive mt-5">
                <form action="#" name="agregar_compra" method="POST" role= "form" onsubmit="return validacionAC();">
        		<div class="row justify-content-center">
                    <div class="col-lg-5 col-md-3 col-sm-8 col-10">
                        <div class="form-group d-flex d-inline-block align-items-center">
                            <label for="numero" class="mb-0 ml-3">No.</label>
                            <input type="text" class="form-control ml-3 input-sm" id="numero_compra">
                        </div>     
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-8 col-10">
                        <div class="form-group d-flex d-inline-block align-items-center">
                            <label for="fecha" class="mb-0">Fecha</label>
                            <input type="date" class="form-control ml-3" id="fecha_compra">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-8 ml-auto">
                        <a href="#" class="btn btn-success float-right mr-4">
                            <i class="fa fa-plus-square fa-lg mr-2" aria-hidden="true"></i>Agregar
                        </a>
                    </div>
                </div>

                <!-- Tabla de productos -->
      	    	<table class="table table-bordered table-hover text-center mt-2">
            		<thead>
                		<tr>
                    		<th>Código</th>
                    		<th>Descripción</th>
                    		<th>Precio</th>
                    		<th>Total</th>
                    		<th></th>
                		</tr>
            		</thead>
           			<tbody id="myTable">
                		<tr>
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
                            <input type="text" disabled value="00.00" oncopy="return false;" id="total_compra">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success float-right mr-4" onclick="sweetalertclick()">Confirmar</button>
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> <!--SweetAlert1-->

</body>
</html>