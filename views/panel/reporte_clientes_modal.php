

<!-- Modal Update-->
<div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalUpdateTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalUpdateTitle">Editar Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre</label>
                  <input type="hidden" class="form-control" id="idcliente-u">
                  <input type="text" class="form-control" id="nombre-u" placeholder="Ingrese tu nombre">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Apellido</label>
                  <input type="text" class="form-control" id="apellido-u" placeholder="Ingrese tu apellido">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Celular</label>
                  <input type="number" class="form-control" id="celular-u" placeholder="Ingrese tu celular">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Correo Electronico</label>
                  <input type="email" class="form-control" id="email-u"  placeholder="Ingrese su Correo Electronico">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Contraseña</label>
                  <input type="password" class="form-control" id="password-u" aria-describedby="emailHelp" placeholder="*******************">
                </div>
              </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" 
                class="btn btn-secondary" 
                data-dismiss="modal">Cancelar
        </button>
        <button type="button" 
                class="btn btn-primary" id="btn-update-cliente">Guardar
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Delete-->
<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="modalDeleteTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalDeleteTitle">¿Deseas Eliminar?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <input type="hidden" value="" id="id-cliente">
        <button type="button" 
                class="btn btn-danger btn-lg"
                id="btn-delete-cliente">
                Eliminar
        </button>
        <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>