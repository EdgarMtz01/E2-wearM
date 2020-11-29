<!--Inicia seccion principal-->
    <div>
        <!--Inicia encabezado Articulos-->
        <div class="container-fluid text-center">
            <h1 class="text-danger">Articulos</h1>
        </div>
        <!--Inicia tabla de productos-->
        <div class="container-fluid text-center">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="row">Agregados recientemente</th>
                    </tr>
                </thead>
            </table>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Talla</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col" class="fecha-carrito">Fecha</th>
                        <th scope="col">Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Blusa</th>
                        <td>M</td>
                        <td>1</td>
                        <td class="fecha-carrito">7-11-2020</td>
                        <td>128.00</td>
                    </tr>
                    <tr>
                        <th scope="row">Pantalon</th>
                        <td>M</td>
                        <td>1</td>
                        <td class="fecha-carrito">7-11-2020</td>
                        <td>150.00</td>
                    </tr>
                    <tr>
                        <th scope="row">Zapatos</th>
                        <td>25</td>
                        <td>1</td>
                        <td class="fecha-carrito">7-11-2020</td>
                        <td>500.58</td>
                    </tr>
                    <tr>
                        <th scope="row">Corbata</th>
                        <td>U</td>
                        <td>1</td>
                        <td class="fecha-carrito">7-11-2020</td>
                        <td>20.000</td>
                    </tr>
                </tbody>
                <thead>
                </thead>
            </table>
        </div>
 
        <div class="container">
            <div class="row mt-4">
                <div class="col-12">
                    <div class="form-group float-right mr-4">
                        <label for="total" >Total: $</label>
                        <input type="text" disabled value="00.00" oncopy="return false;" id="total">
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url(); ?>/index.php/Usuario/metodoPago">
                 <button  type="submit" class="btn btn-primary float-right mr-4">Confirmar</button>
            </a>
           
        </div>
    </div>