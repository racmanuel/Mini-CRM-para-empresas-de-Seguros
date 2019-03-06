<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Registrar Clientes</h3>
  </div>
  <div class="box-body">
    <div class="col">
      <!-- form start -->
      <form class="form-horizontal">
        <div class="box-body">
          <div class="form-group">
            <label for="Nombre" class="col-sm-2 control-label">Nombre</label>
            <div class="col-xs-4">
              <input type="text" class="form-control" id="Nombre" placeholder="Nombre" name="nombre">
            </div>
            <label for="Telefono" class="col-sm-2 control-label">Telefono</label>
            <div class="col-xs-4">
              <input type="tel" class="form-control" id="Telefono" placeholder="Telefono" name="telefono">
            </div>
          </div>
          <div class="form-group">
            <label for="Correo" class="col-sm-2 control-label">Correo</label>
            <div class="col-xs-4">
              <input type="email" class="form-control" id="Correo" placeholder="Correo" name="correo">
            </div>
            <label for="Fecha" class="col-sm-2 control-label">Fecha de Nacimiento</label>
            <div class="col-xs-4">
              <input type="text" class="form-control" id="from-datepicker" name="fecha" />
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-default">Cancel</button>
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
          <th>Telefono</th>
          <th>Correo</th>
          <th>Fecha</th>
        </tr>
      </thead>
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
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable({
      responsive: true,
      "serverSide": true,
      "order": [
        [1, "desc"]
      ],
      "ajax": {
        "url": "config/server_side_clientes.php",
        "type": "POST"
      },
      "columns": [{
          "data": "Id"
        },
        {
          "data": "Nombre"
        },
        {
          "data": "Telefono"
        },
        {
          "data": "Correo"
        },
        {
          "data": "Fecha"
        }
      ]
    });
  });
</script>