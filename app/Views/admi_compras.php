            <div class="container-fluid table-responsive mt-4">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-8 col-12">
                        <input class="form-control mb-3" id="tableSearch" type="text" placeholder="Escribe algo para buscar">                
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-6 ml-auto">
                        <a href="<?php echo base_url(); ?>/index.php/Administrador/agregarCompra" class="btn btn-success float-right" onclick="sweetalertclick()">
                            <i class="fa fa-plus-square fa-lg mr-2" aria-hidden="true"></i>Agregar
                        </a>
                    </div>
                </div>

                <!-- Tabla de productos -->
                <table class="table table-bordered table-hover text-center mt-2">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Empleado</th>
                            <th>Fecha</th>
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
    <script>
        function sweetalertclick(){
            swal(':D','Agregado correctamente');
        }
    </script>
</body>
</html>