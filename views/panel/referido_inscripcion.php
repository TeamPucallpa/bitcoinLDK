<div class="col-md-12">&nbsp;</div>
<div class="col-md-12">
<h2 class="text-center">Lista de ciudadanos</h2>
<p class="text-center">Los usuarios que lo hayan seleccionado como quién los refirió aparecerán en esta página</p>
<a href="signup?referido=<?php echo $celular?>" class="btn btn-primary">Inscripción a un nuevo miembro</a>
</div>
<div class="col-md-12 my-3">
  <table id="tbl_referido" class="table table-bordered" style="width:100%">
          <thead>
              <tr>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Age</th>
                  <th>Start date</th>
                  <th>Salary</th>
              </tr>
          </thead>
          <tbody>
          <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
            </tr>
          </tbody>
          <tfoot>
              <tr>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Age</th>
                  <th>Start date</th>
                  <th>Salary</th>
              </tr>
          </tfoot>
  </table>
</div>

<script src="<?php echo URL_BASE?>public/assets/js/panel/panel_referido.js"></script>

