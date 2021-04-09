<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <span class="text-primary font-weight-bold">Próximo pago</span>
        <span class="badge badge-light" id="time-day">
        <!-- Próximo pago: 0h 32m 24s -->
        </span>
      </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-user-cog"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">Configuración</span>
          <div class="dropdown-divider"></div>
          <a href="index?p=perfil" class="dropdown-item">
          <i class="fas fa-user-edit"></i> Editar perfil
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer"> </a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="<?php echo URL_BASE."controllers/CerrarController.php" ?>" role="button">
        Cerrar Sesión <i class="fas fa-power-off"></i></a>
      </li>
    </ul>
  </nav>