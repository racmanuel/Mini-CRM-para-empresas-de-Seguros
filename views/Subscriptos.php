<?php
include '../backend/Consultas.php';
 ?>
<div class="box box-success">
  <div class="box-header with-border">
    <h3 class="box-title">Subscripciones</h3>
  </div>
  <div class="box-body">
    <div class="col">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>
            <?php
            echo "$".Subscriptos();
            ?>
          </h3>
          <p>Total de Costo de Subscripciones</p>
        </div>
        <div class="icon">
          <i class="fa fa-id-card"></i>
        </div>
      </div>
    </div>
  </div>
  <!-- /.box-body -->
  <div class="box-footer">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
          <th>Id</th>
          <th>Costo</th>
          <th>Caracteristicas</th>
          <th>Numero de Companias</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Id</th>
          <th>Costo</th>
          <th>Caracteristicas</th>
          <th>Numero de Companias</th>
        </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.box-footer-->
</div>
</div>
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Clientes/Con y Sin Seguro</h3>
  </div>
  <div class="box-body">
    <div class="chart">
      <canvas id="cls" style="height: 200px; width: 80px;"></canvas>
      <script>
        var ctx = document.getElementById("cls");
        var myChart = new Chart(ctx, {
          type: 'doughnut',
          data: {
            labels: ["Companias con Subscripcion", "Clientes sin Seguro"],
            datasets: [{
              label: '# of Votes',
              data: [<?php print total_companias(); ?>],
              backgroundColor: [
                'rgba(255, 99, 132, 0.2)'
              ],
              borderColor: [
                'rgba(255,99,132,1)'
              ],
              borderWidth: 2
            }]
          },
          options: {
            scales: {
              yAxes: [{
                ticks: {
                  beginAtZero: true
                }
              }]
            }
          }
        });
      </script>
    </div>
  </div>
  <!-- /.box-body -->
</div>
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable({
      responsive: true,
      "serverSide": true,
      "ajax": {
        "url": "config/server_side_subscripciones.php",
        "type": "POST"
      },
      "columns": [{
          "data": "Id"
        },
        {
          "data": "Costo"
        },
        {
          "data": "Caracteristicas"
        },
        {
          "data": "Id_Company"
        }
      ]
    });
  });
</script>
