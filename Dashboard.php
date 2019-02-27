<?php
include 'backend\Consultas.php';
?>
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Dashboard principal</h3>
  </div>
  <div class="box-body">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>
            <?php echo total_susbcripciones(); ?>
          </h3>
          <p>Subscriptos</p>
        </div>
        <div class="icon">
          <i class="fa fa-shopping-cart"></i>
        </div>
        <a href="#" id="Subscriptos" class="small-box-footer">Mas informacion<i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>
            <?php echo total_reportes(); ?>
          </h3>

          <p>N.de Reportes</p>
        </div>
        <div class="icon">
          <i class="fa fa-line-chart"></i>
        </div>
        <a href="#" id="Reportes" class="small-box-footer">Mas informacion<i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-lg-3 col-xs-6">
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
        <a href="#" id="Clientes" class="small-box-footer">Mas informacion<i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3>
            <?php echo total_companias(); ?>
          </h3>

          <p>Empresas</p>
        </div>
        <div class="icon">
          <i class="fa fa-address-card"></i>
        </div>
        <a href="#" class="small-box-footer">Mas informacion<i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="row">
    </div>
  </div>
  <!-- /.box-body -->
  <div class="box-footer">
    Footer
  </div>
  <!-- /.box-footer-->
</div>
<script src="js/calls.js" charset="utf-8"></script>
