            <div class="container-fluid mt-4">
                <form action="#" name="agregar_producto" method="POST" role= "form" onsubmit="return validacionAP();">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-10">
                            <div class="form-group">
                            <label for="codigo_producto">Código</label>
                            <input type="text" class="form-control" id="codigo_producto">
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-10">
                            <div class="form-group">
                            <label for="imagen_producto">Imagen</label>
                            <input type="file" class="form-control-file" id="imagen_producto" required>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-10">
                            <div class="form-group">
                            <label for="nombre_producto">Nombre</label>
                            <input type="text" class="form-control" id="nombre_producto">
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-10">
                            <div class="form-group">
                            <label for="categoria_producto">Categoría</label>
                            <select id="categoria_producto" class="form-control">
                                <option selected>Ninguna</option>
                                <option>categoria1</option>
                                <option>categoria1</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-10">
                            <div class="form-group">
                            <label for="talla_producto">Talla</label>
                            <input type="text" class="form-control" id="talla_producto">
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-10">
                            <div class="form-group">
                            <label for="cantidad_producto">Cantidad</label>
                            <select id="cantidad_producto" class="form-control">
                                <option selected>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-10">
                            <div class="form-group">
                            <label for="costo_producto">Costo</label>
                            <input type="text" class="form-control" id="costo_producto">
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-10">
                            <div class="form-group">
                            <label for="precio_producto">Precio</label>
                            <input type="text" class="form-control" id="precio_producto">
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                            <div class="form-group">
                            <label for="descripcion_producto">Descripción</label>
                            <textarea class="form-control" rows="3" id="descripcion_producto"></textarea>      
                        </div>
                        <button type="submit" class="btn btn-success d-flex ml-auto">Guardar</button>
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

</body>
</html>