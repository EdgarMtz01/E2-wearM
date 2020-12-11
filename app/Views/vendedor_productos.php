            <div class="container-fluid table-responsive mt-4">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-8 col-12">
                        <input class="form-control mb-3" id="tableSearch" type="text" placeholder="Escribe algo para buscar">
                    </div>
                </div>
                <!-- Tabla de productos -->
                <table class="table table-bordered table-hover text-center mt-2">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Categoría</th>
                            <th>Talla</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <?php if($posts): ?>
                        <?php foreach($posts as $post): ?>
                        <tr>
                            <td><?php echo $post['idProducto']; ?></td>
                            <td><?php echo $post['']; ?></td>
                            <td><?php echo $post['nombre']; ?></td>
                            <td><?php echo $post['descripción']; ?></td>
                            <td><?php echo $post['categoria']; ?></td>
                            <td><?php echo $post['']; ?></td>
                            <td><?php echo $post['stock']; ?></td>
                            <td><?php echo $post['precio']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                        <?php endif; ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!--/Termina contenido de la página  -->
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