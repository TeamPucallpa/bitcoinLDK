<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php echo TITLE_NAME; ?></title>
  <link rel="icon" type="image/png" href="<?php echo ICONO_PAGEWEB; ?>">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../public/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../public/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTable -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.7/css/rowReorder.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">
  <!-- JQUERY -->
  <script src="http://lideresdekapital.com/public/plugins/jquery/jquery.min.js"></script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar --> 
  <?php include("include/panel/navbar.php")?>

  <!-- Main Sidebar Container --> 
  <?php include("include/panel/menu.php")?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <?php 
        switch ($accion) 
        {
          case 'reportes':
                require_once("panel/reporte_clientes.php");
                include("panel/reporte_clientes_modal.php");
            break;

          case 'perfil':
                require_once("panel/perfil_usuario.php");
            break; 
          case 'graficos-clientes':
                require_once("panel/graficos_clientes.php");
              break;
          case 'historial_pagos':
                require_once("panel/historial_pagos.php");
            break;
          case 'inscripciones':
               require_once("panel/referido_inscripcion.php");
          break;
          case 'planes':
                require_once("panel/comprar_planes.php");
                include("panel/modal_terminos.php");
            break;
          default:
                require_once("panel/comprar_planes.php");
                include("panel/modal_terminos.php");
            break;
        }
   ?>
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer --> 
  <?php include("include/panel/footer.php")?>
</div>
<!-- ./wrapper -->


<!-- jQuery -->
<script src="../public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../public/dist/js/adminlte.min.js"></script>

<!--Datatable-->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/rowreorder/1.2.7/js/dataTables.rowReorder.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
<script>  
 let dateNow =new Date();
 let fechaCopyright = document.querySelector("#date_today");
 fechaCopyright.innerHTML = dateNow.getFullYear();
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="<?php echo URL_BASE?>public/assets/js/planes/planes.js"></script>
<script src="<?php echo URL_BASE?>public/assets/js/panel/panel.js"></script>
</body>
</html>
