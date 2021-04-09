<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo URL_BASE?>/public/assets/images/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><?php echo $nombre." ".$apellido ?></span>
      <input type="hidden" id="usuario-id" value="<?php echo $idUsuario?>">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <?php 
        if($rol == "Administrador"){
        ?>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p> Clientes <i class="right fas fa-angle-left"></i> </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index?p=reportes" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reportes</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p> Estadisticas <i class="right fas fa-angle-left"></i>  </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index?p=graficos-clientes" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Clientes</p>
                </a>
              </li>
            </ul>
          </li>
        <?php
        }
       ?>
          <li class="nav-item">
            <a href="index?p=planes" class="nav-link">
              <i class="nav-icon fas fa-shopping-basket"></i>
              <p> Comprar planes <span class="right badge badge-danger">Kartera</span> </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index?p=historial_pagos" class="nav-link">
              <i class="nav-icon fas fa-check-circle"></i>
              <p> Historial de pagos </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index?p=inscripciones" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p> Lista de ciudadanos </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>