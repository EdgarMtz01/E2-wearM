        	<div class="container-fluid table-responsive mt-4">
        		<div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-8 col-12">
                        <input class="form-control mb-3" id="tableSearch" type="text" placeholder="Escribe algo para buscar">                
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-6 ml-auto">
                        <a href="<?php echo base_url(); ?>/index.php/Administrador/agregarProducto" class="btn btn-success float-right">
                            <i class="fa fa-plus-square fa-lg mr-2" aria-hidden="true"></i>Agregar
                        </a>
                    </div>
                </div>

                <!-- Tabla de productos -->
      	    	<table class="table table-bordered table-hover text-center mt-2">
            		<thead>
                		<tr>
                    		<th>Código</th>
                    		<th>Imagen</th>
                    		<th>Nombre</th>
                    		<!--<th>Descripción</th>-->
                    		<th>Categoría</th>
                    		<th>Talla</th>
                    		<th>Cantidad</th>
                    		<th>Precio</th>
                    		<th></th>
                		</tr>
            		</thead>
           			<tbody id="myTable">
                        <?php
                            foreach ($products as $productos) {
                                echo "<tr>";
                                echo "<td>".$productos['idProducto'];
                                echo "<td>" ?>
                                    <img src="<?php echo base_url(); ?>/assets/images/<?php echo $productos['imagen'] ?>" width="70px">
                                <?php
                                echo "<td>".$productos['nombre'];
                                //echo "<td>".$productos['descripcion'];
                                echo "<td>".$productos['categoria'];
                                echo "<td>".$productos['talla'];
                                echo "<td>".$productos['stock'];
                                echo "<td>".$productos['precio'];
                                echo "<td>" 
                                //$id['product']= $productos['idProducto'];
                                ?>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Acciones</button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="<?php echo base_url(); ?>/index.php/Administrador/editarProducto?idPro=<?php echo (int)$productos['idProducto'];?>">Editar</a>
                                        <a class="dropdown-item" href="<?php echo base_url(); ?>/index.php/Administrador/eliminarProducto?idPro=<?php echo (int)$productos['idProducto'];?>">Eliminar</a>
                                    </div>
                                </div>
                                <?php
                                echo "</td>";  
                                echo "</tr>";
                                }
                                ?>
            		</tbody>
        		</table>
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