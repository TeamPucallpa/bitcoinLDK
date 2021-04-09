<link rel="stylesheet" href="<?php echo URL_BASE?>public/assets/css/planes.css">
<div class="col-lg-12"> &nbsp;</div>
<div class="col-lg-12 mx-auto">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Bitcoin</a>
      </li>
    </ul>
      <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="row text-center">
                <div class="col-lg-4">
                  <div class="card plan_basico">
                    <div class="card-body">
                      <h2 class="font-weight-bold txtbasicoBTC">Básico BTC</h2>
                      <h6 class="card-subtitle mb-2 text-muted">Cartera 1</h6>
                      <p class="display-4 font-weight-bold">$50</p>
                      <button type="button" class="btn btn-light btn-lg btn-block mt-3" onclick="modalTerminos('BasicoBTC',50)"> 
                      Comprar ahora
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="card plan_bronce">
                    <div class="card-body">
                      <h2 class="font-weight-bold txtBronceBTC">Bronce BTC</h2>
                      <h6 class="card-subtitle mb-2 text-muted">Cartera 2</h6>
                      <p class="display-4 font-weight-bold">$100</p>
                      <button type="button" class="btn btn-light btn-lg mt-3 btn-block" onclick="modalTerminos('BronceBTC',100)">Comprar ahora</button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="card plan_plata">
                    <div class="card-body">
                      <h2 class="font-weight-bold txtPlataBTC">Plata BTC</h2>
                      <h6 class="card-subtitle mb-2 text-muted">Cartera 3</h6>
                      <p class="display-4 font-weight-bold">$1000</p>
                      <button type="button" class="btn btn-light btn-lg btn-block mt-3" onclick="modalTerminos('PlataBTC',1000)">Comprar ahora</button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="card plan_oro">
                    <div class="card-body">
                      <h2 class="font-weight-bold txtOroBTC">Oro BTC</h2>
                      <h6 class="card-subtitle mb-2 text-muted">Cartera 4</h6>
                      <p class="display-4 font-weight-bold">$10000</p>
                      <button type="button" class="btn btn-light btn-lg btn-block mt-3" onclick="modalTerminos('OroBTC',10000)">Comprar ahora</button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="card plan_diamante">
                    <div class="card-body">
                      <h2 class="font-weight-bold txtDiamanteBTC">Diamante BTC</h2>
                      <h6 class="card-subtitle mb-2 text-muted">Cartera 5</h6>
                      <p class="display-4 font-weight-bold">$25000</p>
                      <button type="button" class="btn btn-light btn-lg btn-block mt-3" onclick="modalTerminos('DiamanteBTC',25000)">Comprar ahora</button>
                    </div>
                  </div>
                </div>
             </div>
          </div>
      </div>
</div>



<!-- Modal Basico-->
<div class="modal fade" id="modalPlanBasico" tabindex="-1" role="dialog" aria-labelledby="modalPlanBasicolCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Comprar el plan</h5>
      </div>
      <div class="modal-body text-center">
        <h4> Confirme el Plan de compra: </h4>
        <h5 class="text-primary font-weight-bold btcSHOPplan"></h5>
        <?php echo "Para: " . $nombre ." ".$apellido?>
      </div>
      <div class="modal-footer">
        <button type="button" 
                class="btn btn-lg btn-outline-primary" data-dismiss="modal">Cancelar</button>
        <button type="button" 
                class="btn btn-primary btn-lg"
                onclick="modalPayPlan()">
                Aceptar
        </button>
      </div>
    </div>
  </div>
</div>



<!-- Modal Comprar / Billetera Digital-->
<div class="modal fade" id="modalBilleteraPlan" tabindex="-1" role="dialog" aria-labelledby="modalPlanBasicolCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <h5 class="text-primary font-weight-bold name_plan"></h5>
      </div>
      <div class="modal-body text-center">
        <div class="row">
          <div class="col-md-6">
          
          <p class="text-danger">NOTA: La dirección anterior es para uso ÚNICO</p>
          </div>
          <div class="col-md-6">
            Precio
            <h5 id="usd_btc"></h5>
            <h6 id="montoDinero"></h6>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" 
                class="btn btn-lg btn-outline-primary" data-dismiss="modal">Cancelar Pago</button>
      </div>
    </div>
  </div>
</div>

