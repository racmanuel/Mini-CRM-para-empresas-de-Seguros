<?php include '../backend/Consultas.php'; ?>
<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Registrar Companias</h3>
  </div>
  <div class="box-body">
    <div class="col">
      <!-- form start -->
      <form class="form-horizontal" action="backend/R_Companias.php" method="post">
        <div class="box-body">
          <div class="form-group">
            <label for="Nombre" class="col-sm-2 control-label">Nombre</label>
            <div class="col-xs-4">
              <input type="text" class="form-control" id="Nombre" placeholder="Nombre" name="nombre" required>
            </div>
            <label for="Ubicacion" class="col-sm-2 control-label">Ubicacion</label>
            <div class="col-xs-4">
              <select class="form-control" name="ubicacion" id="Ubicacion">
                <?php foreach (Ubicacion_Companias() as $company): ?>
                  <option value="<?php echo $company->Ubicacion; ?>"><?php echo $company->Ubicacion; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="Telefono" class="col-sm-2 control-label">Telefono</label>
            <div class="col-xs-4">
              <input type="tel" class="form-control" id="Telefono" placeholder="Telefono" name="telefono" required>
            </div>
            <label for="Correo" class="col-sm-2 control-label">Correo</label>
            <div class="col-xs-4">
              <input type="email" class="form-control" id="Correo" placeholder="Correo" name="correo" required>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-info pull-right">Registrar</button>
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
          <th>Nombre</th>
          <th>Ubicacion</th>
          <th>Telefono</th>
          <th>Correo</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Id</th>
          <th>Nombre</th>
          <th>Ubicacion</th>
          <th>Telefono</th>
          <th>Correo</th>
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
        "url": "config/server_side_companias.php",
        "type": "POST"
      },
      "columns": [{
          "data": "Id"
        },
        {
          "data": "Nombre"
        },
        {
          "data": "Ubicacion"
        },
        {
          "data": "Telefono"
        },
        {
          "data": "Correo"
        }
      ]
    });
  });
</script>
