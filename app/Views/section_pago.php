<!-- Inicia seccion de método de pago-->
<section>
        <div class="row mx-auto">
            <div class="col-lg-8 col-md-7 col-sm-12 col-12 mb-4" align="center">
                <div class="mt-4">
                    <h3>Selecciona el método de pago</h3>
                <p>Por favor especifique un método de pago, lo guardaremos como opción</p>
                </div>
                <div class="form-check mb-4">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label botones_pago bg-light" for="exampleRadios1">
                    <div>
                        <h4>Tarjeta de credito o debito</h4>
                        <p>Aceptamos la mayoria de tarjetas de credito y debito</p>
                    </div>
                    <img src="<?php echo base_url(); ?>/assets/images/visa.jpg" width="100px">
                    <img src="<?php echo base_url(); ?>/assets/images/mastercard.png" width="100px">
                </label>
        </div>
        <div class="form-check mb-4">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            <label class="form-check-label botones_pago bg-light" for="exampleRadios2">
                <div>
                    <h4>Pago en efectivo</h4>
                    <p>Pago en sucursal</p>
                </div>
                <img src="<?php echo base_url(); ?>/assets/images/oxxo.png" width="120px" >
                <img src="<?php echo base_url(); ?>/assets/images/7eleven.png" height="70px">
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
            <label class="form-check-label botones_pago bg-light" for="exampleRadios3">
                <div>
                    <h4>Paypal</h4>
                    <p>Pago electrónico</p>
                </div>
                <img src="<?php echo base_url(); ?>/assets/images/paypal.jpg" width="80px" >
            </label>
        </div>
        </div>

            <div class="col-lg-4 col-md-5 col-sm-12 col-12 d-flex align-items-center justify-content-center mb-4">
                <div class="botones_pago bg-light text-center">
                    <p>Puedes revisar el pedido antes de proceder</p>
                    <a href="<?php echo base_url(); ?>/index.php/Usuario/metodoPago" class="btn btn-warning">Continuar</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /Termina seccion de método de pago-->
