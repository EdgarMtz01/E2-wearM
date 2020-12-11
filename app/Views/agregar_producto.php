
            <div class="container-fluid mt-4">
                <form action="<?php echo base_url(); ?>/index.php/Administrador/confirmarProducto" name="agregar_producto" method="POST" role= "form" onsubmit="return validacionAP();">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-10">
                            <div class="form-group">
                            <label for="codigo_producto">Código</label>
                            <input type="text" class="form-control" id="codigo_producto" name="codigo_producto">
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-10">
                            <div class="form-group">
                            <label for="imagen_producto">Imagen</label>
                            <input type="file" class="form-control-file" id="imagen_producto" name="imagen_producto" required>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-10">
                            <div class="form-group">
                            <label for="nombre_producto">Nombre</label>
                            <input type="text" class="form-control" id="nombre_producto" name="nombre_producto">
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-10">
                            <div class="form-group">
                            <label for="categoria_producto">Categoría</label>
                            <select id="categoria_producto" name="categoria_producto" class="form-control">
                                <option selected>Ninguna</option>
                                <option>Hombre</option>
                                <option>Mujer</option>
                                <option>Niños</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-10">
                            <div class="form-group">
                            <label for="talla_producto">Talla</label>
                            <input type="text" class="form-control" id="talla_producto" name="talla_producto">
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-10">
                            <div class="form-group">
                            <label for="stock_producto">Cantidad</label>
                            <input type="text" class="form-control" id="stock_producto" name="stock_producto">
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-10">
                            <div class="form-group">
                            <label for="costo_producto">Costo</label>
                            <input type="text" class="form-control" id="costo_producto" name="costo_producto">
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-10">
                            <div class="form-group">
                            <label for="precio_producto">Precio</label>
                            <input type="text" class="form-control" id="precio_producto" name="precio_producto">
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                            <div class="form-group">
                            <label for="descripcion_producto">Descripción</label>
                            <textarea class="form-control" rows="3" id="descripcion_producto" name="descripcion_producto"></textarea>      
                        </div>
                        <button type="submit" name="subir" class="btn btn-success d-flex ml-auto"  onclick="sweetalertclick()">Guardar</button>
                    </div>
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
    <!--Ejecutar sweetAlert-->
    <script> 
        function sweetalertclick(){ 
            swal(':D','Agregado correctamente','Success');
        }
    </script>

</body>
</html>