<?php
include '../backend/Consultas.php';
 ?>
<div class="box box-success">
  <div class="box-header with-border">
    <h3 class="box-title">Reportes</h3>
  </div>
  <div class="box-body">
    <div class="col-lg-12 col-xs-12">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>
            <?php echo total_reportes(); ?>
          </h3>
          <p>Reportes de Incidentes</p>
        </div>
        <div class="icon">
          <i class="fa fa-line-chart"></i>
        </div>
      </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">

    </div>
    <!-- /.box-footer-->
  </div>
</div>
<div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Reportes de Incidentes</h3>
      </div>
      <div class="box-body">
        <div class="chart">
          <canvas id="rep" style="height: 600px; width: 250px;"></canvas>
          <script>
            var ctx = document.getElementById("rep");
            var myChart = new Chart(ctx, {
              type: 'bar',
              data: {
                labels: ["Daño Total", "Daño Moderado", "Daño Bajo"],
                datasets: [{
                  label:  ['# de Reportes'],
                  data: [<?php print reportes_nivel_dano_total(); ?>,<?php print reportes_nivel_dano_moderado(); ?>,<?php print reportes_nivel_dano_leve(); ?>],
                  backgroundColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(182, 54, 235, 1)'
                  ],
                  borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(231, 54, 235, 1)'
                  ],
                  borderWidth: 1
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
