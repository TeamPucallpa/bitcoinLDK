
<div class="container">
  <div class="row">
    <div class="col-md-12 mt-3">
        <h2 class="text-center">
          <?php 
            date_default_timezone_set('America/Lima');
            $year = date('Y'); 
            echo "Cantidad de personas registradas por meses en el año : " . $year;
          ?>
        </h2>
      <div class="card card-primary card-outline">
        <div class="card-body"> 
          <canvas id="myChart" width="100" height="40"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js"></script>
<script src="<?php echo URL_BASE?>public/assets/js/panel/panel_graficos.js"> </script>