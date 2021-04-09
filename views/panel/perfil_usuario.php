<div class="col-lg-4 mt-3 mx-auto">
  <div class="card card-primary card-outline">
    <div class="card-body">
        <form action="../controller/ClientesController.php?a=perfil-update" method="POST">
        <div class="form-group">
          <label for="nombre"><font face="Franklin Gothic">Nombres:</font></label>
          <input  type="hidden" 
                  id="profile_id" 
                  name="profile_id">

          <input type="text" 
                  placeholder="Escribe tu nombre" 
                  id="profile_nombre"
                  name="profile_nombre" 
                  class="form-control" 
                  required="">
        </div>
        <div class="form-group">
          <label for="apellido"><font face="Franklin Gothic">Apellidos:</font></label>
          <input type="text" 
                  placeholder="Escribe tu apellido" 
                  id="profile_apellido" 
                  name="profile_apellido" 
                  class="form-control" 
                  required="">
        </div>
        <div class="form-group">
          <label for="celular"><font face="Franklin Gothic">Celular:</font></label>
          <input 
                  type="number" 
                  placeholder="Escribe tu número de celular" 
                  id="profile_celular" 
                  name="profile_celular" 
                  class="form-control" 
                  required="">
        </div>
        <div class="form-group">
          <label for="email"><font face="Franklin Gothic">Correo Electronico:</font></label>
          <input 
                  type="email" 
                  placeholder="Escribe tu correo electronico"
                  id="profile_email" 
                  maxlength="20" 
                  name="profile_email" 
                  class="form-control" 
                  required="">
        </div>
        <div class="form-group">
          <label for="contraseña"><font face="Franklin Gothic">Contraseña:</font></label>
          <input type="password" 
                  placeholder="Escribe su contraseña" 
                  id="profile_password" 
                  maxlength="20" 
                  name="profile_password" 
                  class="form-control"
                  required="">
          <div class="custom-control custom-checkbox mr-sm-2">
            <input type="checkbox" 
                   class="custom-control-input" 
                   onchange="document.getElementById('profile_password').type = this.checked ? 'text' : 'password'" 
                   id="verContrasena">
            <label class="custom-control-label efectoverContrasena" for="verContrasena">Ver Contraseña</label>
          </div>
        </div>
        <div class="col-md-12">
          <button type="submit" class="btn btn-primary btn-lg btn-block">Actualizar</button>
        </div>
        </form>
    </div>  
  </div>
</div>

<script src="<?php echo URL_BASE?>public/assets/js/panel/panel_perfil.js"></script>
