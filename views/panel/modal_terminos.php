<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
          <span class="text-info">Términos del servicio</span>
          <input type="text" class="Light weight text form-control-plaintext" id="nombrePlanBTC">
        </h5>
        </button>
      </div>
      <div class="modal-body">
        <iframe width="100%" height="400" src="<?php echo URL_BASE?>legal/terms/update.php"></iframe>
        <div class="col-md-12">
                  <p class="text-danger">
                    ¡Atención!: Después de hacer clic en el botón "Aceptar", debe transferir fondos a nuestro monedero de BTC dentro de los 30 minutos siguientes. Asegúrese de estar preparado.
                  </p>
                  <p class="text-danger">
                    Estos son los términos y condiciones generales. Asegúrese de aceptar los términos escritos en el plan que desea comprar antes de aceptar los términos y condiciones.
                  </p>
                  <div class="custom-control custom-checkbox  mb-2">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label font-weight-normal" for="customCheck1">
                    Reembolsable dentro de las 72 horas luego de la compra del plan. Sin embargo, no es posible reembolsar el dinero cuando está registrado en un Árbol de ciudadano.
                    </label>
                  </div>
                  <div class="custom-control custom-checkbox mb-2">
                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                    <label class="custom-control-label font-weight-normal" for="customCheck2">
                      Acepto los Términos y Condiciones.  
                    </label>
                  </div>
                  <div class="custom-control custom-checkbox mb-2">
                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                    <label class="custom-control-label font-weight-normal" for="customCheck3">
                      Recuerde: Toda transacción de Bitcoin está sujeta a las tarifas de transacción. En caso de retiro, a la suma total se le deducirá una pequeña tarifa. Esto no se debe a nuestra política, sino que depende de cómo están estructuradas las transacciones de bitcoin.
                    </label>
                  </div>
          <span class="badge badge-danger"
                id="smsTerminos"
                style="display:none">
          Acepta los check los términos y condiciones generales 
          </span>
         </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="btnAceptarShop">Aceptar</button>
      </div>
    </div>
  </div>
</div>