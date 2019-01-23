<?php include 'config/head.php'; ?>
<body class="hold-transition skin-red sidebar-mini">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Numero de Clientes</h3>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
      </div>
    </div>
    <?php
    try {
      $conect= new PDO('mysql:host=localhost;dbname=crm','root','');
      echo "Conexion Establecida! <br>";
      $statement=$conect->prepare("SELECT COUNT(*) FROM users");
      $statement->execute();
      $number_of_rows = $statement->fetchColumn();
    } catch (PDOException $e) {
      echo $e;
    }
     ?>
    <div class="box-body">
      <div class="chart">
        <canvas id="myChart" style="position: relative; height:40vh; width:40vw"></canvas>
        <script type="text/javascript">
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
          type: 'bar',
          data: {
            labels: ["N.Clientes ", "Blue", "Yellow", "Green", "Purple", "Orange"],
            datasets: [{
              label: '# of Votes',
              data: [<?php echo $number_of_rows; ?>, 404, 500, 350, 200, 100, 700],
              backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
              ],
              borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
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

  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Line Chart</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
      <div class="chart">
        <canvas id="lineChart" style="height: 219px; width: 431px;" width="431" height="219"></canvas>
      </div>
    </div>
    <!-- /.box-body -->
  </div>
<?php include 'config/body'; ?>
