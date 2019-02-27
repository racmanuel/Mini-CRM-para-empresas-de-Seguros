<?php
include '../backend/Consultas.php';
 ?>
<div class="box box-warning">
  <div class="box-header with-border">
    <h3 class="box-title">Clientes</h3>
  </div>
  <div class="box-body">
    <div class="col">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>
            <?php echo total_clientes(); ?>
          </h3>
          <p>Clientes</p>
        </div>
        <div class="icon">
          <i class="fa fa-users"></i>
        </div>
      </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <!--<tbody>
          <?php /* foreach (Clientes_Tabla() as $cliente) { ?>
            <tr>
                <td><?php echo $cliente->Id; ?></td>
                <td><?php echo $cliente->Nombre; ?></td>
                <td><?php echo $cliente->Telefono; ?></td>
                <td><?php echo $cliente->Correo; ?></td>
                <td><?php echo $cliente->Fecha_Nacimiento; ?></td>
            </tr>
          <?php } */?>
        </tbody>-->
        <tfoot>
            <tr>
              <th>Id</th>
              <th>Nombre</th>
              <th>Telefono</th>
              <th>Correo</th>
              <th>Fecha</th>
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
            labels: ["Clientes con Seguro", "Clientes sin Seguro"],
            datasets: [{
              label: '# of Votes',
              data: [<?php print clientes_con_seguro(); ?>, <?php print clientes_sin_seguro(); ?>],
              backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)'
              ],
              borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)'
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
    $('#example').DataTable( {
       responsive: true,
       "serverSide": true,
       "ajax": {
           "url": "config/server_side_clientes.php",
           "type": "POST"
       },
       "columns": [
           { "data": "Id" },
           { "data": "Nombre" },
           { "data": "Telefono" },
           { "data": "Correo" },
           { "data": "Fecha" }
       ]
   } );
  });
</script>
