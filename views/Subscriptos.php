<?php
include '../backend/Consultas.php';
 ?>
<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Subscripciones</h3>
  </div>
  <div class="box-body">
    <div class="col-lg-12 col-xs-12">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>
            <?php echo total_susbcripciones(); ?>
          </h3>
          <p>Clientes Suscritos</p>
        </div>
        <div class="icon">
          <i class="fa fa-shopping-cart"></i>
        </div>
      </div>
    </div>
    <div class="row">
      <canvas id="subs" style="position: relative; height:50vh; width:50vw"></canvas>
      <script>
        var ctx = document.getElementById("subs");
        var myChart = new Chart(ctx, {
          type: 'doughnut',
          data: {
            labels: ["Clientes con Seguro", "Clientes sin Seguro"],
            datasets: [{
              label: '# of Votes',
              data: [2,3],
              backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)'
              ],
              borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)'
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
    <!-- /.box-body -->
    <div class="box-footer">
      Footer
      <?php
      //imprimir();
       ?>
    </div>
    <!-- /.box-footer-->
  </div>
</div>
