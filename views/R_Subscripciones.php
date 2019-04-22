<?php include '../backend/Consultas.php'; ?>
<div class="box box-warning">
  <div class="box-header with-border">
    <h3 class="box-title">Registrar Subscripciones</h3>
  </div>
  <div class="box-body">
    <div class="col">
      <!-- form start -->
      <form class="form-horizontal" action="backend/R_Subscripciones.php" method="post">
        <div class="box-body">
          <div class="form-group">
            <label for="Costo" class="col-sm-2 control-label">Costo</label>
            <div class="col-xs-4">
              <input type="text" class="form-control" id="Costo" placeholder="$" name="costo" required>
            </div>
            <label for="Caracteristicas" class="col-sm-2 control-label">Caracteristicas</label>
            <div class="col-xs-4">
              <textarea class="form-control" name="caracteristicas" rows="8" cols="60" required></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="empresa" class="col-sm-2 control-label">Empresa de Seguro</label>
            <div class="col-xs-4">
              <select class="form-control" name="Id_Company_T">
              <?php foreach (Companias() as $empresa): ?>
                <option value="<?php echo $empresa->Id; ?>"><?php echo $empresa->Nombre; ?></option>
              <?php endforeach; ?>
              </select>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-warning pull-right">Registrar</button>
        </div>
        <!-- /.box-footer -->
      </form>
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
          <th>Id_Company</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Id</th>
          <th>Costo</th>
          <th>Caracteristicas</th>
          <th>Id_Company</th>
        </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.box-footer-->
</div>
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
