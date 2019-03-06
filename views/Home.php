<?php
include '../backend/Consultas.php';
 ?>
<div class="row">
  <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="box box-success">
      <div class="box-header with-border">
        <h3 class="box-title">Reportes</h3>
      </div>
      <div class="box-body">
        <div class="col-md-6">
          <!-- small box -->
          <div class="small-box bg-blue">
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

          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>
                <?php echo total_companias(); ?>
              </h3>
              <p>Empresas</p>
            </div>
            <div class="icon">
              <i class="fa fa-building-o"></i>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>
                <?php echo total_susbcripciones(); ?>
              </h3>
              <p>Subscripciones</p>
            </div>
            <div class="icon">
              <i class="fa fa-id-card"></i>
            </div>
          </div>

          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3>
                <?php echo total_reportes(); ?>
              </h3>
              <p>Reportes</p>
            </div>
            <div class="icon">
              <i class="fa fa-flag"></i>
            </div>
          </div>
        </div>

        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>
    </div>
  </div>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Ultimos Reportes</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="table-responsive">
          <table class="table no-margin">
            <thead>
              <tr>
                <th>Folio</th>
                <th>Nivel de Daño</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Ubicacion</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach (Reportes_Last() as $Rep): ?>
              <tr>
                <td>
                  <?php echo $Rep->Folio; ?>
                </td>
                <td>
                  <?php
                    if ($Rep->Nivel_Dano =='leve') {
                      echo "<span class='label label-success'>Bajo</span>";
                    }
                    if($Rep->Nivel_Dano =='moderado'){
                      echo "<span class='label label-warning'>Moderado</span>";
                    }
                    if ($Rep->Nivel_Dano =='perdida total') {
                      echo "<span class='label label-danger'>Alto</span>";
                    }
                    ?>
                </td>
                <td>
                  <?php echo $Rep->Fecha; ?>
                </td>
                <td>
                  <?php echo $Rep->Hora; ?>
                </td>
                <td>
                  <?php echo $Rep->Ubicacion; ?>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- /.table-responsive -->
      </div>
      <!-- /.box-body -->
      <div class="box-footer clearfix">
      </div>
      <!-- /.box-footer -->
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="box box-danger">
      <div class="box-header with-border">
        <h3 class="box-title">Nivel de Daños</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="row">
          <div class="col-md-8">
            <div class="chart-responsive">
              <canvas id="pieChart" height="380" width="600" style="width: 600px; height: 380px;"></canvas>
            </div>
            <!-- ./chart-responsive -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.box-body -->
      <div class="box-footer no-padding">
        <ul class="nav nav-pills nav-stacked">
          <li><a href="#">Daño Bajo
              <span class="pull-right text-red"><i class="fa fa-angle-down"></i>
                <?php print Promedio_Danos_Bajo(); ?>%</span></a></li>
          <li><a href="#">Daño Moderado <span class="pull-right text-green"><i class="fa fa-angle-up"></i>
                <?php print Promedio_Danos_Medio(); ?>%</span></a>
          </li>
          <li><a href="#">Daño Alto
              <span class="pull-right text-yellow"><i class="fa fa-angle-left"></i>
                <?php print Promedio_Danos_Alto(); ?>%</span></a></li>
        </ul>
      </div>
      <!-- /.footer -->
    </div>
  </div>

  <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="box box-warning">
      <div class="box-header with-border">
        <h3 class="box-title">Ultimos Usuarios</h3>

        <div class="box-tools pull-right">
          <span class="label label-primary"><?php print Numero_Usuarios(); ?> Nuevos Miembros</span>
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
          </button>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body no-padding">
        <ul class="users-list clearfix">
          <?php foreach (Usuarios() as $user): ?>
          <li>
            <img src="<?php print $user->img_profile; ?>" alt="User Image">
            <a class="users-list-name" href="#"><?php print $user->Name ?></a>
            <span class="users-list-date"><?php print $user->Email ?></span>
          </li>
          <?php endforeach; ?>
        </ul>
        <!-- /.users-list -->
      </div>
      <!-- /.box-body -->
      <div class="box-footer text-center">
        <a href="javascript:void(0)" class="uppercase">View All Users</a>
      </div>
      <!-- /.box-footer -->
    </div>
  </div>
</div>
<script type="text/javascript">
  var ctx = document.getElementById("pieChart");
  var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ["Bajo", "Moderado", "Alto"],
      datasets: [{
        label: '# of Votes',
        data: [<?php print reportes_nivel_dano_leve(); ?>, <?php print reportes_nivel_dano_moderado(); ?>, <?php print reportes_nivel_dano_total(); ?>],
        backgroundColor: [
          'rgba(255, 0, 54, 0.99)',
          'rgba(0, 152, 255, 1)',
          'rgba(255, 138, 0, 1)'
        ]
      }]
    }
  });
</script>
